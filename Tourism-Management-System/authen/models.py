from django.db import models
from django.contrib.auth.models import User
import hashlib


class Donor(models.Model):
    user = models.OneToOneField(User, on_delete=models.CASCADE)
    user_type = models.IntegerField(default = 1)
    pan = models.CharField(max_length=500, null = False)
    address = models.TextField()
    location = models.CharField(max_length = 500)
    email = models.EmailField(unique=True)
    # profile_pic = models.ImageField(
    #     default='media/mainpage4.jpg', blank=True, null=True)

    def __str__(self):
        return self.user.username




class Volunteer(models.Model):
    user = models.OneToOneField(User, on_delete=models.CASCADE)
    user_type = models.IntegerField(default = 2)
    name = models.CharField(max_length = 500)
    age = models.IntegerField()
    occupation = models.CharField(max_length = 500)
    phone_no = models.IntegerField()    

    def __str__(self):
        return self.user.username



class Profile(models.Model):
    user = models.OneToOneField(User, on_delete=models.CASCADE)
    user_type = models.IntegerField(default = 3)
    email = models.EmailField(unique=True)
    bio = models.CharField(max_length=500, blank=True, null=True)
    profile_pic = models.ImageField(
        default='media/mainpage4.jpg', blank=True, null=True)
    confirmhash = models.CharField(max_length=100, blank=True, null=True)

    def __str__(self):
        return self.user.username

    # def createhash(self, email):
    #     hash = hashlib.sha1()
    #     temp = email + 'hahaha'
    #     hash.update(temp.encode('utf-8'))
    #     tp = hash.hexdigest()
    #     print(tp)
    #     self.confirmhash = tp
