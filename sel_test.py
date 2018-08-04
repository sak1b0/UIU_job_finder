# -*- coding: utf-8 -*-
"""
Created on Mon Jul 23 09:13:54 2018

@author: Acer PC
"""

from selenium import webdriver

import time

#driver= webdriver.Chrome("E:\Anaconda\cdrivers\chromedriver")

chromeOptions = webdriver.ChromeOptions()
prefs = {'profile.managed_default_content_settings.images':2,'disk-cache-size': 4096} #images off ans disc cache 4mb
chromeOptions.add_experimental_option("prefs", prefs)
driver = webdriver.Chrome("E:\Anaconda\cdrivers\chromedriver",chrome_options=chromeOptions) #image off driver

driver.get("http://jobs.bdjobs.com/jobsearch.asp?fcatId=8&icatId=")
#time.sleep(5)

last_nmbr=driver.find_element_by_xpath("//*[@id=\"topPagging\"]/ul/li[7]/a").text  #click counter generation
last_nmbr=last_nmbr.replace(".","") #extra ... removal
max_clicks=int(last_nmbr) 

i=1
while(i<=max_clicks):
    driver.find_element_by_xpath("//*[@id=\"jobList\"]/div[1]/div/div[24]/div[1]/div/div[1]/div/ul/li[2]/a").click()
    page_source=driver.page_source
    time.sleep(1)
    i+=1
#clicks on the next button

driver.quit()


'''
driver.get("http://www.google.com/")
driver.find_element_by_name("q").send_keys("JFK history")
driver.find_element_by_name("btnK").click()
'''
