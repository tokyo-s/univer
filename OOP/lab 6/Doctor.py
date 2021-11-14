from Operations_Staff import  Operations_Staff


class Doctor(Operations_Staff):

    def __init__(self,title, givenName, middleName, familyName, name, birthDate, gender, homeAddress, phone, joined, education, certification, languages, speciality, locations):
        super().__init__(title, givenName, middleName, familyName, name, birthDate, gender, homeAddress, phone, joined, education, certification, languages)
        self.__locations = locations
        self.__speciality = speciality

    @property
    def get_locations(self):
        return self.__locations

    @property
    def get_speciality(self):
        return self.__speciality