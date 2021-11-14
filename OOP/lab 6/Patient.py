from Person import Person

class Patient(Person):

    def __init__(self, id, title, givenName, middleName, familyName, name, gender, birthDate, homeAddress, phone, age, accepted, sickness, prescriptions, allergies, SpecialReqs):

        super().__init__(title, givenName, middleName, familyName, name, birthDate, gender, homeAddress, phone)
        self.__SpecialReqs = SpecialReqs
        self.__allergies = allergies
        self.__prescriptions = prescriptions
        self.__sickness = sickness
        self.__accepted = accepted
        self.__age = age
        self.__id = id


    @property
    def get_SpecialReqs(self):
        return self.__SpecialReqs

    @property
    def get_allergies(self):
        return self.__allergies

    @property
    def get_prescriptions(self):
        return self.__prescriptions

    @property
    def get_sickness(self):
        return self.__sickness

    @property
    def get_accepted(self):
        return self.__accepted

    @property
    def get_age(self):
        return self.__age

    @property
    def get_id(self):
        return self.__id

    def __str__(self):
        return ', '.join('%s=%s' % item for item in vars(self).items())