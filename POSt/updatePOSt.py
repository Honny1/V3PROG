import os
import shutil
from tqdm import tqdm
import mammoth
from html5print import HTMLBeautifier
import codecs

START ="<!DOCTYPE html><html><head><title>Zapis z POSt</title><meta charset='utf-8'><meta property='og:title' " \
       "content='Zapis z POSt' /><meta property='og:type' content='website' />" \
       "<meta property='og:url' content='./'/><meta property='og:image' " \
       "content='' /><meta property='og:description'"\
        "content='Zapis z hodiny POSt' /><link href='//cdn.muicss.com/mui-0.9.30/css/mui.min.css' " \
       "rel='stylesheet' type='text/css' /><script " \
       "src='//cdn.muicss.com/mui-0.9.30/js/mui.min.js'></script></head><body><div class='mui-container'> "

END ="<div class='paticka' style='text-align: center;'><hr ><p style='text-align: center; font-size: 75%; border:0%; padding:0%'> Copyright &copy; 2018, by Hony</p></div></div></body></html>"

def run():
    src = "Source"
    srcOld = "Notes"
    files = []
    src_files = os.listdir(src)
    src_files_old_files = os.listdir(srcOld)
    for i in range(len(src_files_old_files)):
        x=src_files_old_files[i].replace(".php", ".docx")
        src_files_old_files[i] = x
    for file in src_files:
        if file not in src_files_old_files:
            files.append(os.path.join(src, file))

    for i in tqdm(range(len(files))):
        if files[i].endswith(".docx"):
            with open(files[i], 'rb') as f:
                savePhp=str(files[i].replace('.docx', ".php"))
                with open(savePhp.replace('Source', "Notes"), 'wb')as b:
                    b.write(START.encode('utf8'))
                    document = mammoth.convert_to_html(f)
                    b.write(document.value.encode('utf8'))
                    b.write(END.encode('utf8'))
            cleanHtml(savePhp.replace('Source', "Notes"))
            copyFile(files[i],files[i].replace('Source', "Download"))


def cleanHtml(src):
    with codecs.open(src, "r", "utf-8") as f:
        htmlFile = f.read()
        htmlClean = HTMLBeautifier.beautify(htmlFile, 4)
        print(htmlClean)
        
    with codecs.open(src, "w", "utf-8") as f:
        f.write(str(htmlClean))


def copyFile(src, dest):
    try:
        os.makedirs(os.path.dirname(dest))
    except OSError:
        if not os.path.isdir(os.path.dirname(dest)):
            raise

    if os.path.isfile(src):
        shutil.copy(src, os.path.dirname(dest))
run()
input()
