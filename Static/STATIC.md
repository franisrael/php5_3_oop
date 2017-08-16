__callStatic() new magic method is added in PHP V5.3

PHP V5 has several specially defined methods that can be used inside classes
known as magic methods. When defined in the class, these methods provide special
functionallity, and enable:

-	Overloading (the ability to allow a method to accept different type of parameters)
-	Polymorphism (the ability to allow different data types to use the same interface)

They also open the door to using different types of OOP programming methods and design 
patterns with PHP easily. 


-	The __callStatic() magic method

-	Dynamic static calls


LATE STATIC BINDING

Static references, such as those made with self or __CLASS__, are resolved in the class scope in which the function was defined. The problem is tha the reference would be incorrect if the class was extended and the call was made from the new child class. Late static binding has been added in PHP V5.3 to alleviate this problem.