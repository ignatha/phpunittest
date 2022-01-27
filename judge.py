candidates = {}
s = "1 3,1 4,2 3,2 4,4 3"
fruits = [[int(val) for val in pair.split()] for pair in s.strip().split(',')]
for s, o in fruits:
    print("s : ",s,", o : ",o,".")
    candidates[o] = set()

for s, o in fruits:
    if s in candidates:
        del candidates[s]

    if o in candidates:
        candidates[o].add(s)

print(candidates)
judge = -1
for jc, ts in candidates.items():
    print("jc : ",jc,", ts : ",ts,".")
    if len(ts) != 4-1:
        continue
    
    if judge == -1:
        judge = jc
        continue

    judge = -1
    break

print(judge)