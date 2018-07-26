# -*- coding: utf-8 -*-
"""
Created on Mon Jul 23 09:13:54 2018

@author: Acer PC
"""

from selenium import webdriver

import time

driver= webdriver.Chrome("E:\Anaconda\cdrivers\chromedriver")

driver.get("http://jobs.bdjobs.com/jobsearch.asp?fcatId=8&icatId=")
print('waiting for 10 sec')

print('done waiting')

driver.find_element_by_xpath("//*[@id=\"jobList\"]/div[1]/div/div[24]/div[1]/div/div[1]/div/ul/li[2]/a").click()
#driver.quit()


'''
driver.get("http://www.google.com/")
driver.find_element_by_name("q").send_keys("JFK history")
driver.find_element_by_name("btnK").click()
'''
