from Person import Person

class Staff(Person):

    def __init__(self,title, givenName, middleName, familyName, birthDate, gender, homeAddress, phone, joined, education, certification, languages):

        super().__init__(title, givenName, middleName, familyName, birthDate, gender, homeAddress, phone)
        self.__languages = languages
        self.__certification = certification
        self.__education = education
        self.__joined = joined

    @property
    def get_languages(self):
        return self.__languages

    @property
    def get_certification(self):
        return self.__certification

    @property
    def get_education(self):
        return self.__education

    @property
    def get_joined(self):
        return self.__joined

    def __str__(self):
        return ', '.join('%s=%s' % item for item in vars(self).items())