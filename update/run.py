import os
import shutil

from tqdm import tqdm
import mammoth
from html5print import HTMLBeautifier
import codecs
"""
START ="<!DOCTYPE html><html><head><title>Zapis z TVY</title><meta charset='utf-8'><meta property='og:title' " \
       "content='Zapis z TVY' /><meta property='og:type' content='website' />" \
       "<meta property='og:url' content='./'/><meta property='og:image' " \
       "content='https://buchticka.eu/V3PROG/TVY/background.jpg' /><meta property='og:description'"\
        "content='Zapis z hodiny TVY' /><link href='//cdn.muicss.com/mui-0.9.30/css/mui.min.css' " \
       "rel='stylesheet' type='text/css' /><script " \
       "src='//cdn.muicss.com/mui-0.9.30/js/mui.min.js'></script></head><body><div class='mui-container'> "
"""
START ="<!DOCTYPE html><html><head><title>Zapis z POSt</title><meta charset='utf-8'><meta property='og:title' " \
       "content='Zapis z POSt' /><meta property='og:type' content='website' />" \
       "<meta property='og:url' content='./'/><meta property='og:image' " \
       "content='https://buchticka.eu/V3PROG/POSt/background.jpg' /><meta property='og:description' content='Zapis z " \
       "hodiny POSt' /><link href='//cdn.muicss.com/mui-0.9.30/css/mui.min.css' " \
       "rel='stylesheet' type='text/css' /><script " \
       "src='//cdn.muicss.com/mui-0.9.30/js/mui.min.js'></script></head><body><div class='mui-container'> "

END ="<div class='paticka' style='text-align: center;'><hr ><p style='text-align: center; font-size: 75%; border:0%; padding:0%'> Copyright &copy; 2018, <a href='https://buchticka.eu'>Buchticka.eu</a> Team by Hony</p></div></div></body></html>"

def run():
    src = ".\\Source"
    srcOld = ".\\Notes"
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
            copyFile(files[i],files[i].replace('Source', "Download"))

def cleanHtml(src):
    f = codecs.open(src, "r", "utf-8")
    htmlFile = f.read()
    htmlClean = HTMLBeautifier.beautify(htmlFile, 4)
    print(htmlClean)
    f.close()
    f = codecs.open(src, "w", "utf-8")
    f.write(str(htmlClean))
    f.close()

def copyFile(src, dest):
    try:
        os.makedirs(dest)
    except OSError:
        if not os.path.isdir(dest):
            raise

    if os.path.isfile(src):
        shutil.copy(src, dest)
run()
input()
