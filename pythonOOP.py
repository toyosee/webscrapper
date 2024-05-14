# Working with classes
# from PyDictionary import PyDictionary

# class MyClass:
#     x = 5

# tes1 = MyClass()
# print(tes1.x)

# dicto = PyDictionary()
# print(dicto.meaning("tv"))

# class Person:
#     def __init__(this, name, age, address=None):
#         this.name = name
#         this.age = age
#         this.address = address

#     # def __str__(self):
#     #     return f"{self.name}({self.age})"

#     def greetings(this):
#         return f"Good morning {this.name}"
    
#     def details(this):
#         return f"{this.name}, {this.age}"
    
#     def status(this, married):
#         return f"{this.name} is {married}"

# # constructor
# person1 = Person("Bolu", 500, " Barnawa")
# person2 = Person("Victor", 500, " Barnawa")
# person2.age = 90
# print(person2.status("single"))
# print(person1.status("married"))
# # print(person1.greetings())

# class Animal:
#     #Class can not be empty, use the pass key word for empty classes
#     pass

# inheritance
# A class inheriting all the properties of another class. when pass keyword is set,
# it means the class will not have its own methods
# class Student(Person):
#     def __init__(this, fname, lname, grad_year):
#         super().__init__(fname,lname)
#         this.grad_year = grad_year

#     def welcome(this):
#         greet = f"welcome {this.name}, to {this.grad_year} graduation year"
#         return greet

# student = Student("Aliyu", 22, 2019)
# print(student.welcome())


# Class Polymorphism and Inheritance
# Let's create classes that inherits from one another
# Execute same method for all classes to show polymorphism

class Motoci:
    def __init__(wannan, iri, abin_koyi):
        wannan.iri = iri
        wannan.abin_koyi = abin_koyi

    def motsawa(wannan):
        return "TAFIYA!!"

class Mota(Motoci):
    pass

class JirginRuwa(Motoci):
    def motsawa(wannan):
        return "TAFIYA TA RUWA!!!"

class JirginSama(Motoci):
    def motsawa(wannan):
        return "TAFIYA TA SAMA!!!"

mota = Mota("Honda", "Accord")
jirgin_ruwa = JirginRuwa("Siailor", "Xs22")
jirgin_sama = JirginSama("BOEING", "AirBus222")

for aiki in (mota, jirgin_ruwa, jirgin_sama):
    print(f"{aiki.iri} {aiki.abin_koyi} Na yana {aiki.motsawa()}")
