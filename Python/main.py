from account import Account
from account import Account
from car import Car

if __name__ == "__main__":
    car = Car("AMS234", Account("Andrés Herrera", "123MAS"))
    print(vars(car))
    print(vars(car.driver))
