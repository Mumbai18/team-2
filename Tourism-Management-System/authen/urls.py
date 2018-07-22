from django.conf.urls import url
from . import views

urlpatterns = [
    url(r'^donor/', views.donor),
    url(r'^volunteer/', views.volunteer),

    url(r'^logout/', views.logout),
    # url(r'^dashboard/', views.dashboard),
    url(r'^forgotpassword/', views.forgotpassword),
    url(r'^(?P<p>[\w\-\_]+)/resetpassword/$', views.resetpassword),
    url(r'^viewprofile/(?P<p>[\w]+)', views.viewprofile),
    url(r'^viewprofile', views.viewprofile),
    url(r'^myaccount', views.myaccount),
]
  