from django.conf import settings
from django.conf.urls import url, include
from django.contrib import admin

from django.conf.urls.static import static
from . import views



urlpatterns = [
    url(r'^main/', views.main),
    url(r'^makeapayment/', views.makepayment),
   
] + static(settings.MEDIA_URL, document_root=settings.MEDIA_ROOT)