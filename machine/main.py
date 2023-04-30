from tqdm.notebook import tqdm
from nltk.sentiment import SentimentIntensityAnalyzer
import seaborn as sns
import matplotlib.pyplot as plt
import numpy as np
import pandas as pd
import nltk
# nltk.download('maxent_ne_chunker')
# nltk.download('words')
# nltk.download('vader_lexicon')

plt.style.use('ggplot')

df = pd.read_csv('./machine/archive/Twitter_Data.csv')

ax = df['category'].value_counts().sort_index().plot(
    kind='bar', title='Count of Reviews by Category', figsize=(10, 15))

ax.set_label('Rev')

# plt.show()

example = df['clean_text'][50]
print(example)
tokens = nltk.word_tokenize(example)

tagged = nltk.pos_tag(tokens)

entities = nltk.chunk.ne_chunk(tagged)

sia = SentimentIntensityAnalyzer()

x = sia.polarity_scores(example)

print(x)
