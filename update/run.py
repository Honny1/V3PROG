import os
from tqdm import tqdm
import mammoth

START ="<!DOCTYPE HTML><html><head></head><body>"
END ="</body></html>"

def run():
    src = "./"
    files = []
    src_files = os.listdir(src)
    for file in src_files:
        files.append(os.path.join(src, file))

    for i in tqdm(range(len(files))):
        if (files[i].endswith(".docx")):
            f = open(files[i], 'rb')
            b = open(str(files[i].replace('.docx', "")) + '.php', 'wb')
            b.write(START.encode('utf8'))
            document = mammoth.convert_to_html(f)
            b.write(document.value.encode('utf8'))
            f.close()
            b.write(END.encode('utf8'))
            b.close()


run()
