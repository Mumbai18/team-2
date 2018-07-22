from django.shortcuts import render,redirect
from authen.models import *
# Create your views here.
def chat(request):
    if request.user.is_authenticated():
        pr = Profile.objects.get(user = request.user)
        return render(request,'index.html',{"profile" : pr})
    else:
        return redirect('/authen/login/')