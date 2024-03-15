#Date:01-03-2024

#Functions & Modules

#function with default argument
'''
def wishes(str="Good Day..."):
    print("Hi...",str);

wishes()
wishes("Good Morning...")


def val(a,b=20):
    print(a)
    print(b)

val(10)
val(10,100)
'''
'''
#function with keyword argument
def val(a,b=500):
    print("a=",a)
    print("b=",b)

val(a=100,b=200)
val(b=25,a=50)
'''
'''
#function with required argument
def val(a,b):
    print("a=",a)
    print("b=",b)

val(10,20)
val(10)
'''
'''
#function with return value
def val(a,b):
    print("a=",a)
    print("b=",b)

    s=a+b
    return s

sum=val(10,20)
print("sum=",sum)
'''
'''
#function with multiple return value
def val(a,b):
    a=a+5
    b=b+10
    return a,b

x,y=val(10,20)
print("x=",x)
print("y=",y)
'''
'''
#variable-length argument
def val(*numbers):
    for i in numbers:
        print(i)

x=val(1,2,3,4,5)
'''


