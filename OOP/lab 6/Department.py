from Staff import Staff


class Department:

    def __init__(self, name):
        self.__name = name
        self.__staff_list = []

    @property
    def get_name(self):
        return self.__name

    def addStaff(self,staff):
        if staff in self.__staff_list:
            print('Already in staff list')
        else:
            if isinstance(staff, Staff):
                self.__staff_list.append(staff)
            else:
                raise Exception('Error, introduced data is not staff')

    def printStaff(self):
        for staff in self.__staff_list:
            print(staff)

    def __str__(self):
        return ', '.join('%s=%s' % item for item in vars(self).items())
