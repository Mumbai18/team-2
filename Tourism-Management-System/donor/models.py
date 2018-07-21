# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models
from authen.models import Donor

# Create your models here.
class Donation(models.Model):
    donor = models.ForeignKey(Donor)
    amount = models.IntegerField()
    date = models.DateField()

    def __str__(self):
        return str(self.amount)