# Working with classes
# from PyDictionary import PyDictionary

# class MyClass:
#     x = 5

# tes1 = MyClass()
# print(tes1.x)

# dicto = PyDictionary()
# print(dicto.meaning("tv"))

class Person:
    def __init__(this, name, age, address=None):
        this.name = name
        this.age = age
        this.address = address

    # def __str__(self):
    #     return f"{self.name}({self.age})"

    def greetings(this):
        return f"Good morning {this.name}"
    
    def details(this):
        return f"{this.name}, {this.age}"
    
    def status(this, married):
        return f"{this.name} is {married}"

# constructor
person1 = Person("Bolu", 500, " Barnawa")
person2 = Person("Victor", 500, " Barnawa")
person2.age = 90
print(person2.status("single"))
print(person1.status("married"))
# print(person1.greetings())





