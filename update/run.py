import os
from tqdm import tqdm
import mammoth
from html5print import HTMLBeautifier
import codecs
#TODO: Add skipping existing files
START ="<!DOCTYPE HTML><html><head></head><body>"
END ="</body></html>"

def run():
    src = "C:\\xampp\\htdocs\\V3PROG\\POSt\\Source"
    files = []
    src_files = os.listdir(src)
    for file in src_files:
        files.append(os.path.join(src, file))

    for i in tqdm(range(len(files))):
        if files[i].endswith(".docx"):
            f = open(files[i], 'rb')
            savePhp=str(files[i].replace('.docx', ".php"))
            b = open(savePhp.replace('Source', "Notes"), 'wb')
            b.write(START.encode('utf8'))
            document = mammoth.convert_to_html(f)
            b.write(document.value.encode('utf8'))
            f.close()
            b.write(END.encode('utf8'))
            b.close()
            cleanHtml(savePhp.replace('Source', "Notes"))

def cleanHtml(src):
    f = codecs.open(src, "r", "utf-8")
    htmlFile = f.read()
    htmlClean = HTMLBeautifier.beautify(htmlFile, 4)
    print(htmlClean)
    f.close()
    f = codecs.open(src, "w", "utf-8")
    f.write(str(htmlClean))
    f.close()
run()
