"""TMS URL Configuration

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/1.11/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  url(r'^$', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  url(r'^$', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.conf.urls import url, include
    2. Add a URL to urlpatterns:  url(r'^blog/', include('blog.urls'))
"""
from django.conf import settings
from django.conf.urls import url, include
from django.contrib import admin

from django.conf.urls.static import static
from . import views



urlpatterns = [
    url(r'^donor/', include('donor.urls')), 
    # url(r'^volunteer/', include('volunteer.urls')),    
    url(r'^reports/', include('reports.urls')), 
    url(r'^admin/', admin.site.urls),
    url(r'^chat/', include('chatroom.urls')),
    url(r'^authen/', include('authen.urls')),
    url(r'^dashboard/', include('explore.urls')),
    url(r'^$',views.home ),
    url(r'^home/',views.home ),    
     url(r'^faq/',views.faq ),
    url(r'^about/', views.about),
    url(r'^friends/(?P<p>[\w]+)', views.friendprofile),
    url(r'^friends/', views.friends),
     url(r'^leaderboard/', views.leaderboard),

   
] + static(settings.MEDIA_URL, document_root=settings.MEDIA_ROOT)