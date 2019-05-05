#!/usr/bin/env python

import nltk
import sys

sentence = sys.argv[1];
tokens = nltk.word_tokenize(sentence)
print(tokens)