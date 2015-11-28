import os
files = os.listdir()

processed = []
skipped = []

for filename in files:
    if filename[-4:] == "html" or filename[-3:] == "htm":
        file = open(filename, mode='rt')
        text = file.read()
        file.close()
        text = text.split("GOWS")
        file = open(filename, mode='wt')

        index = 0
        for part in text:
            file.write(part[index:-21])
            if index == 0:
                index = 1

            
        file.close()
        processed.append(filename)
    else:
        skipped.append(filename)

print("PROCESSED")
for part in processed:
    print("     ", part)

print("SKIPPED")
for part in skipped:
    print("     ", part)
