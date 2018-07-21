from django.shortcuts import render, redirect
from django.http import HttpResponse, JsonResponse, HttpResponseRedirect
from authen.models import Donor
from .models import Donation
import datetime


def main(request):
    if request.user.is_authenticated():
        if request.method == 'POST':
            pass
        else:
            user = request.user
            donor = Donor.objects.get(user=user)
            don = Donation.objects.filter(donor=donor)
            print(don)
            return render(request, 'main.html', {"donation": don, 'user' : user, "type" : "donor"})

def makepayment(request):
    if request.user.is_authenticated():
        if request.method == 'POST':
            user = request.user
            amount = request.POST['amount']
            donor = Donor.objects.get(user=user)

            Donation.objects.create(donor = donor, amount = amount, date = datetime.date.today())
            return HttpResponseRedirect('/donor/main/')
        else:
            return render(request,'makeapayment.html')
