<?php

interface BrandFactoryInterface
{
    /**
    * The factory design pattern is used when we have a superclass with multiple sub-classes and based on input,
    * we need to return one of the sub-class. This pattern takes out the responsibility of the instantiation of a class
    * from the client program to the factory class.
   */

   /**
      I like thinking about design pattens in terms of my classes being 'people,' and the patterns are the ways
      that the people talk to each other. So, to me the factory pattern is like a hiring agency. You've got someone that
      will need a variable number of workers. This person may know some info they need in the people they hire,
      but that's it.So, when they need a new employee, they call the hiring agency and tell them what they need. Now,
      to actually hire someone, you need to know a lot of stuff - benefits, eligibility verification, etc.
      But the person hiring doesn't need to know any of this - the hiring agency handles all of that.
      In the same way, using a Factory allows the consumer to create new objects without having to know the details of
      how they're created, or what their dependencies are - they only have to give the information they actually want.
   */

    public function buildBrand();
}