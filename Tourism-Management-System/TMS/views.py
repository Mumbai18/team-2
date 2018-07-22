from django.shortcuts import render, redirect
from django.http import HttpResponse, JsonResponse, HttpResponseRedirect

from authen.models import *
from explore.models import *

def home(request):
     if request.user.is_authenticated():
        pr = Profile.objects.get(user=request.user)
        return render(request, 'index.html', {'profile': pr})
     else:
        return render(request, 'index.html')

def about(request):
     if request.user.is_authenticated():
        pr = Profile.objects.get(user=request.user)
        return render(request, 'about-us.html', {'profile': pr})
     else:
        return render(request,'about-us.html')

def faq(request):
     if request.user.is_authenticated():
        pr = Profile.objects.get(user=request.user)
        return render(request, 'faq.html', {'profile': pr})
     else:
        return render(request, 'faq.html')

def friends(request):
     if request.user.is_authenticated():
        pro = Profile.objects.all()
        pr = Profile.objects.get(user=request.user)
        return render(request, 'friends.html', {'profile': pr, 'list':pro})


def friendprofile(request, p):
      if request.user.is_authenticated():
        user = User.objects.get(username=p)
        pr = Profile.objects.get(user=user)
        fly = Flyer.objects.filter(creater = pr)
        photos = Photo.objects.filter(user = pr)
        videos = Video.objects.filter(user = pr)
        print(photos)
        return render(request, 'profile.html', {"profile": pr, "flyers" : fly, "photos" : photos, "videos" : videos})

def leaderboard(request):
      if request.user.is_authenticated():
        pr = Profile.objects.get(user=request.user)
        fly = Flyer.objects.all()
        return render(request, 'leaderboard.html', {'profile': pr, 'list':fly})
   


