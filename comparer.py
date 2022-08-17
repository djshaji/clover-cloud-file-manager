import sys

list1 = []
list2 = []

with open(sys.argv [1]) as f:
    list1 = f.read().split ("\n")

with open(sys.argv [2]) as f:
    list2 = f.read().split ("\n")

# print (list1)
print (f'list1: {len (list1)}\t list2: {len (list2)}')

for file in list1:
    if file not in list2:
        print (file)