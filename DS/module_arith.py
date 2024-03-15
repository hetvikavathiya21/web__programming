#Date:01-03-2024

#Modules

#creating module
import module_airth

#sq&cb
def sq(a):
    c=a*a
    return c

def cb(b):
    d=b*b*b
    return d

x=module_airth.sq(4)
print("Square=",x)

y=module_airth.cb(2)
print("Cube=",y)

#sum
def sum(a,b):
    s=a+b
    return s

def sub(a,b):
    sb=a-b
    return sb

import module_arith

x=module_arith.sum(10,20)
print("sum=",x)

