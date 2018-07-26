#'http://jobs.bdjobs.com/jobsearch.asp?fcatId=8&icatId='
from  urllib.request import urlopen as uReq
from bs4 import BeautifulSoup as soup


my_url='http://jobs.bdjobs.com/jobsearch.asp?fcatId=8&icatId='

#opening up connection, grabbing the page
uClient=uReq(my_url)
page_html = uClient.read()
uClient.close()

#html parsing
page_soup = soup(page_html,"html.parser")

#grabs each jobs in the box their link and title of post
alllinks = page_soup.findAll("div",{"class":"job-title-text"})
#grabs the company name
companies = page_soup.findAll("div",{"class":"comp-name-text"})

#title of the file to be saved on
filename="jobs.csv"
f = open(filename,"w")
#column names
headers="job_title, company_name, job_link\n"
f.write(headers) 

i=0
while i< len(alllinks):
    job_name= alllinks[i].a.text.strip()
    comp_name=companies[i].text.strip()
    job_link ="http://jobs.bdjobs.com/"+alllinks[i].a["href"]
   # print(job_link+" "+job_name+" "+comp_name+"\n")
    f.write(job_name.replace(",","|")+","+comp_name.replace(",","|")+","+job_link.replace(",","|")+"\n")
    i+=1

f.close()
'''
for items in alllinks:
    job_link =items.a["href"]
    job_name= items.a.text.strip()
    print(job_name)
    print(job_link+"\n")
'''    
