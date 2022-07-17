import sys
import pandas as pd
from sentence_transformers import SentenceTransformer, util


def func(chosen):
    model = SentenceTransformer('all-MiniLM-L6-v2')

    # Read data from csv
    df = pd.read_csv('/Applications/XAMPP/xamppfiles/htdocs/Online_Course_Recommender--main/coursea_data.csv')
    course_name = df['course_title'].tolist()

    # Compare similarity

    # Encode all sentences
    emb1 = model.encode(course_name)
    emb2 = model.encode(chosen)

    # Compute cosine similarity between all pairs
    cos_sim = util.cos_sim(emb1, emb2)

    # Add all pairs to a list with their cosine similarity score
    all_sentence_combinations = []
    for i in range(len(cos_sim) - 1):
        all_sentence_combinations.append([cos_sim[i][0], i, 0])

    # Sort list by the highest cosine similarity score
    all_sentence_combinations = sorted(all_sentence_combinations, key=lambda x: x[0], reverse=True)
    for score, i, j in all_sentence_combinations[0:5]:
        if cos_sim[i][j] > 0.5:
            suggestion_row = df.loc[df['course_title'] == course_name[i]].iloc[:,1:].to_string(header=False, index=False)
            print(suggestion_row)


if __name__ == "__main__":
    func(chosen=sys.argv[1].replace("_", " "))
