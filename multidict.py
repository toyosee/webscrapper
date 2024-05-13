from PyMultiDictionary import MultiDictionary

# create a local instance of dictonary for use in our application

bolu = MultiDictionary()

meaning = bolu.meaning("en", "nigeria")

print(meaning[1])