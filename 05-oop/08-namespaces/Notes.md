# Namespace 
Namespaces are qualifiers that solve two different problems: 
 1. They allow for better organization by grouping classes that work together to perform a task.
 2. They allow the same name to be used for more than one class. 

## Why Use Namespaces?
Imagine you are using two different libraries in your project, and both have a classs names `Database`. Without namessapces, PHP would not know which `Database` class you are referring to when you instantitate it. Namepsacess solve this problem by giving each class a unique identifier. 

## Defining a Namespace 
To define a namespace, you use the `namespace` keyword at the top of your PHP file, before any other code. 

