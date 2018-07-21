from django.shortcuts import render, redirect
from django.http import HttpResponse, JsonResponse, HttpResponseRedirect
from authen.models import *
from explore.models import *
from PIL import Image

# Create your views here.


def dashboard_home(request):
    if request.user.is_authenticated():
        pr = Profile.objects.get(user=request.user)
        data = Flyer.objects.all()
        return render(request, 'dashboard.html', {'profile': pr, 'allflyers': data})
    else:
        return redirect('/authen/login/')




def place(request, p):
    if request.user.is_authenticated():
        title = request.POST['title']
        desc = request.POST['desc']
        loc = request.POST['loc']
        date = request.POST['date']
        time = request.POST['time']
        # Flyer.objects.all().delete()
        pr = Profile.objects.get(user=request.user)
        fly = Flyer.objects.create(
            title=title, description=desc, location=loc, creater=pr,date=date,time=time)
        fly.save()
        print("kjgjg", request.FILES)
        a = request.FILES

        for photo in request.FILES.getlist('img'):
            print(photo)
            photomodel = Photo.objects.create(user=pr, flyer=fly, photo=photo)
            trial_image = Image.open(photo)

            if trial_image.verify():
               photomodel.save()

        for video in request.FILES.getlist('vid'):
            videomodel = Video.objects.create(user=pr, flyer=fly, video=video)
            videomodel.save()

         # return render(request, 'dashboard.html',{'allflyers':data})
        return redirect('/dashboard/home/')
    else:
        return redirect('/authen/login/')


def location(request,p):
     data = Flyer.objects.get(title=p) 
     print(data)
     photos = Photo.objects.filter(flyer = data)
     videos = Video.objects.filter(flyer = data)
     data.viewcount=data.viewcount+1
     data.save()
     pr = Profile.objects.get(user=request.user)
     print(photos)
     return render(request, 'location.html',{'profile': pr,'flyer':data ,'photos' : photos , 'videos' : videos})
