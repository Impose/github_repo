from gpiozero import MotionSensor
from picamera import PiCamera
from time import sleep


camera = PiCamera()
camera.rotation = 180
camera.resolution = (1920, 1080)
pir = MotionSensor(4)
while True:
    pir.wait_for_motion()
    camera.start_preview()
    pir.wait_for_no_motion()
    sleep(10)
    camera.stop_preview()
