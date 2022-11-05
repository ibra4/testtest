import os, re, json

INPUT_FOLDER = "./input"
DS = "/"

files = map(lambda fileName: re.sub("\.json$", "", fileName), os.listdir(INPUT_FOLDER))


def getFilePath(fileName):
    return INPUT_FOLDER + DS + f + ".json"


def buildTable(f):
    filePath = open(getFilePath(f))
    jsonFile = json.load(filePath)
    allData = []
    for item in jsonFile:
        obj = {
            "scaled_score": item[0],
            "value": item[1],
            "min_age": item[2],
            "max_age": item[3],
            "max_age": item[3],
            "type": f,
        }
        allData.append(obj)
    return allData


finalData = []
for f in files:
    tableData = buildTable(f)
    finalData += tableData

json_object = json.dumps(finalData, indent=4)
with open("./output/finalData.json", "w") as outfile:
    outfile.write(json_object)
