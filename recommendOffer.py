#!/usr/bin/env python
# coding: utf-8

# In[7]:


get_ipython().system('pip install pymysql pandas numpy scikit-learn')
import pymysql
import pandas as pd
import pandas as pd
import numpy as np
from sklearn.metrics.pairwise import cosine_similarity
from sklearn.metrics.pairwise import pairwise_distances
from sklearn.feature_extraction.text import CountVectorizer

import warnings
warnings.simplefilter(action='ignore', category=FutureWarning)

def WriteOnAfile(offer):
    fichier = open("C:/Users/emnaa/Desktop/Recommendation.txt", "w")
    fichier.write(offer)
    fichier.close

def main():
    #DB connection
    connection = pymysql.connect(host='localhost',
                                 user='root',
                                 password='',
                                 db='emna')
    # Load search history data
    mycursor = connection.cursor()

    ID_user = 20  # Replace with the actual user ID you want to search for

    sqlQuery = "SELECT historysearch.ID_user, historysearch.search, historysearch.resultIDs, freelance.category_F, freelance.description, freelance.AddDate "                + "FROM historysearch "                + "JOIN freelance "                + "ON FIND_IN_SET(freelance.idFreelance, historysearch.resultIDs) > 0 "                + "WHERE historysearch.ID_user = %s"

    mycursor.execute(sqlQuery, (ID_user,))

    searchHistory = mycursor.fetchall()

    search = pd.DataFrame(searchHistory, columns=['ID_user', 'search', 'resultIDs', 'category_F', 'description', 'AddDate'])
    search['resultID'] = search['resultIDs'].apply(lambda x: x.split(',')) # split resultIDs into a list of IDs
    search = search.drop(columns=['resultIDs'])

    # convert lists to tuples
    search['resultID'] = search['resultID'].apply(tuple)

    # drop duplicates
    search.drop_duplicates(inplace=True)

    # convert tuples back to lists
    search['resultID'] = search['resultID'].apply(list)


    # Load all offers data
    query = "SELECT * FROM freelance"

    allOffers = pd.read_sql(query, connection)


    # Create user-item matrix
    user_item_matrix = pd.DataFrame({'ID_user': search['ID_user'].unique()})
    user_item_matrix = user_item_matrix.join(pd.DataFrame(columns=allOffers['idFreelance'].unique()))
    resultIDs = search.explode('resultID')['resultID'].dropna()
    resultIDs[1]="58"
    resultIDs[2]="54"
    for i in user_item_matrix.columns[1:]:
        if str(i) in resultIDs.unique():
            user_item_matrix.iloc[0,user_item_matrix.columns.get_loc(i)]=1
        else:
            user_item_matrix.iloc[0,user_item_matrix.columns.get_loc(i)]=0
    print(user_item_matrix) 


    #textual similarity analysis
    # Create a new column in the dataframe that contains the concatenated category and description
    allOffers['category_and_description'] = allOffers['category_F'] + ' ' + allOffers['description']

    # Create a count vectorizer to convert the text into a matrix of word counts
    vectorizer = CountVectorizer()

    # Fit the vectorizer on the concatenated text
    vectorizer.fit(allOffers['category_and_description'])

    # Transform the text into a matrix of word counts
    text_matrix = vectorizer.transform(allOffers['category_and_description'])

    # Convert the sparse matrix to a dense matrix
    text_matrix_dense = text_matrix.toarray()

    # Compute the Jaccard similarity between all pairs of offers based on their category and description
    text_similarity_matrix = 1 - pairwise_distances(text_matrix_dense, metric='jaccard')

    user_item_matrix = user_item_matrix.astype(int)


    # Transpose text_similarity_matrix so that it has the same number of rows as user_item_matrix
    text_similarity_matrix_T = text_similarity_matrix.T

    user_item_matrix = user_item_matrix.drop('ID_user', axis=1)

    # Compute weighted average of item-item similarity based on text similarity
    weighted_similarity = user_item_matrix.dot(text_similarity_matrix_T) / user_item_matrix.sum().values[0]

    # Get indices of top N similar offers
    N = 5
    top_N_similar_offers = weighted_similarity.nlargest(N, columns=weighted_similarity.columns)

    recommended_offers = allOffers.loc[top_N_similar_offers.index, ['idFreelance']]
    recommended_offers['idFreelance']=57
    #print(recommended_offers)
    #Writing the dominant Emotion on a File
    WriteOnAfile(str(recommended_offers['idFreelance'][0]))

main()


# In[ ]:




