from flask import request
from tqdm.notebook import tqdm
from nltk.sentiment import SentimentIntensityAnalyzer
import seaborn as sns
import matplotlib.pyplot as plt
import numpy as np
import pandas as pd
import nltk
from flask import Flask
app = Flask(__name__)
# nltk.download('maxent_ne_chunker')
# nltk.download('words')
# nltk.download('vader_lexicon')

# plt.style.use('ggplot')

# df = pd.read_csv('./machine/archive/Twitter_Data.csv')

# ax = df['category'].value_counts().sort_index().plot(
#     kind='bar', title='Count of Reviews by Category', figsize=(10, 15))

# ax.set_label('Rev')

# # plt.show()

# example = df['clean_text'][50]
# print(example)
# tokens = nltk.word_tokenize(example)

# tagged = nltk.pos_tag(tokens)

# entities = nltk.chunk.ne_chunk(tagged)

# sia = SentimentIntensityAnalyzer()

# x = sia.polarity_scores(example)


@app.get('/get_rate')
def list_programming_languages():
    word = request.args['word']
    tokens = nltk.word_tokenize(word)
    tagged = nltk.pos_tag(tokens)
    entities = nltk.chunk.ne_chunk(tagged)
    sia = SentimentIntensityAnalyzer()
    x = sia.polarity_scores(word)
    result = ''
    if (x['compound'] >= 0):
        result = 'positive'
    else:
        result = "negative"
    return result
