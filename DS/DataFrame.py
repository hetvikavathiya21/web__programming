#Particular column

import pandas as pd
'''
data={'Name':['Hetvi','Khushi','Riya'],
      'Age':[20,22,25],
      'City':['New York','San Francisco','Los Angeles']}
df=pd.DataFrame(data,columns=['Name'])
print(df)


#Custom index
data={'Name':['Hetvi','Khushi','Riya'],
      'Age':[20,22,25],
      'City':['New York','San Francisco','Los Angeles']}
df=pd.DataFrame(data,index=['x','y','z'])
print(df)
'''
#For particular rows within a datframe
data={'Name':['Hetvi','Khushi','Riya'],
      'Age':[20,22,25],
      'City':['New York','San Francisco','Los Angeles']}
df=pd.DataFrame(data)
print(df.loc[0])
#Multiple rows
data={'Name':['Hetvi','Khushi','Riya'],
      'Age':[20,22,25],
      'City':['New York','San Francisco','Los Angeles']}
df=pd.DataFrame(data)
print(df.loc([[0,2]]))





















