from django.conf import settings
from django.conf.urls.static import static
from django.conf.urls import url, include
from django.contrib import admin
from . import views



urlpatterns = [
    url(r'^chat/', views.chat),
]