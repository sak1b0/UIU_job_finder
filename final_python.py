# -*- coding: utf-8 -*-
"""
Created on Sat Aug  4 16:53:03 2018

@author: sakib
"""

from bs4 import BeautifulSoup as soup
from selenium import webdriver
import time

my_arr=[]	#the global array to store temp data

class job:
    job_position=""
    job_location=""
    job_post_link=""
    def __init__(self,pos,loc,lin):
        self.job_position=pos
        self.job_location=loc
        self.job_post_link=lin
        def display():
            print(job.job_position+" "+job.job_location+" "+job.job_post_link+"\n")		


def save_to_csv():
    try:
        f=open("jobs.csv","w")
        headers="job_title,company_name,job_link\n"
        f.write(headers)
        i=0;
        while(i<len(my_arr)):
         f.write(my_arr[i].job_position+","+my_arr[i].job_location+","+my_arr[i].job_post_link+","+"\n")
         i+=1
    except:
        print("File realted error while saving")
    finally:
        f.close()
	
    return		


def process_data(page_html):
	
	page_soup = soup(page_html,"html.parser") #html parsing
	
	alllinks = page_soup.findAll("div",{"class":"job-title-text"}) #grabs each jobs in the box their link and title of post
	
	companies = page_soup.findAll("div",{"class":"comp-name-text"}) #grabs the company name

	
	#filename="jobs.csv" #title of the file to be saved on

    #len(alllinks)
	i=0
	while( i<len(alllinks) ):
	    job_name= alllinks[i].a.text.strip()
	    comp_name=companies[i].text.strip()
	    job_link ="http://jobs.bdjobs.com/"+alllinks[i].a["href"]
	    j_obj=job(job_name.replace(",","|"),comp_name.replace(",","|"),job_link.replace(",","|"))
	    my_arr.append(j_obj)  #adding to array to write later
	    # print(job_link+" "+job_name+" "+comp_name+"\n")
	   # f.write(job_name.replace(",","|")+","+comp_name.replace(",","|")+","+job_link.replace(",","|")+"\n")
	    i+=1

	
	
	return


def surf_jobs():
    chromeOptions = webdriver.ChromeOptions()
    prefs = {'profile.managed_default_content_settings.images':2,'disk-cache-size': 4096} #images off ans disc cache 4mb
    chromeOptions.add_experimental_option("prefs", prefs)
    driver = webdriver.Chrome("E:\Anaconda\cdrivers\chromedriver",chrome_options=chromeOptions) #image off driver
    
    driver.get("http://jobs.bdjobs.com/jobsearch.asp?fcatId=8&icatId=")
    #time.sleep(5)

    last_nmbr=driver.find_element_by_xpath("//*[@id=\"topPagging\"]/ul/li[7]/a").text  #click counter generation
    last_nmbr=last_nmbr.replace(".","") #extra ... removal
    max_clicks=int(last_nmbr) #number of next clicks
    max_clicks-=1  #because first page is already loaded so one less click
   
    
    i=0
    while(i<3):
        driver.find_element_by_xpath("//*[@id=\"jobList\"]/div[1]/div/div[24]/div[1]/div/div[1]/div/ul/li[2]/a").click()  #next button click
        page_src=driver.page_source
        process_data(page_src) #sending the page to bs to process and save
        time.sleep(1)
        i+=1
    
    driver.quit()
    return

print("Starting the task")
start_time=time.time()
surf_jobs()
print("data collection was successful")
save_to_csv()
print("storing to file was successful")
finish_time=time.time()
print("It took %s seconds to complete",finish_time - start_time)
print("Finished")
