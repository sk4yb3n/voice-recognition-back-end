#!/usr/bin/env python

import nltk
import sys
from nltk.corpus import stopwords

sentence = sys.argv[1];
tokens = nltk.word_tokenize(sentence)

sr = stopwords.words('english')
clean_tokens = tokens[:]
for token in tokens:
    if token in stopwords.words('english'):
        clean_tokens.remove(token)

print(clean_tokens)