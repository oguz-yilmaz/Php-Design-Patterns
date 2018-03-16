### What is Factory Method ?

Simply put, It is the way of creating shared types where creation of those types depends upon some business logic and not that simple to create those objects with just `new` keyword as we do for regular objects.

#### Objectives

###### - If we have 2 different factories, then that means that we have two different ways of creating/instantiating objects
###### - In this design pattern, we have 2 different entity, one is the things/objects that we want to create/instantiate and the factories/methods that creates those objects

#### Our Example Overview

Here we ll have an advertisement factory where we want to show ads in 2 different ways.We ll also have 3 different types of adds which are Morning Ads, Afternoon Ads and Night Ads where assume that we categorized those
ads based on the time of the day.  
Now like I mentioned we ll have 2 different types of factory where will provide us both getting those ad clases based on their name and based on the hour of the day.
First one will look like the following:

```php
    $factory = new BaseAdsFactory("morning");
    $morningAdd = new $factory->get(); // will return MorningAds instance
    
    $factory = new BaseAdsFactory("afternoon");
    $morningAdd = new $factory->get(); // will return AfternoonAds instance
    
    $factory = new BaseAdsFactory("night");
    $morningAdd = new $factory->get(); // will return NightAds instance

```
And the other one will loke like this

```php
$factory = new ScheduledAdsFactory();
$scheduled = $factory->get(); // will return one of the 3 types of Ad class instance based on the time of the day
```
