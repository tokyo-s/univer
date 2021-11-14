class Person:
    def __init__(self, title, givenName, middleName, familyName, birthDate, gender, homeAddress, phone):
        self.__title = title
        self.__givenName = givenName
        self.__middleName = middleName
        self.__familyName = familyName
        self.__name = self.__givenName + ' ' + self.__middleName + ' ' + self.__familyName
        self.__birthDate = birthDate
        self.__gender = gender
        self.__homeAddress = homeAddress
        self.__phone = phone

    @property
    def get_title(self):
        return self.__title

    @property
    def get_givenName(self):
        return self.__givenName

    @property
    def get_middleName(self):
        return self.__middleName

    @property
    def get_familyName(self):
        return self.__familyName

    @property
    def get_name(self):
        return self.__name

    @property
    def get_birthDate(self):
        return self.__birthDate

    @property
    def get_gender(self):
        return self.__gender

    @property
    def get_homeAddress(self):
        return self.__homeAddress

    @property
    def get_phone(self):
        return self.__phone

