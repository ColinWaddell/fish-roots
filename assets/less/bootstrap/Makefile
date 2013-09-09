DEBUG=True
LESS_FILES=bootstrap.less
CSS_FILES=../../css/main.min.css
DEBUG=True

ifeq ($(DEBUG),True)
	LESSC=lessc
else
	LESSC=lessc -x
endif

all: lessc

lessc: 
	$(LESSC) $(LESS_FILES) > $(CSS_FILES)


