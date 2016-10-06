all:	checkconfig updatecode updateusers

checkconfig:
ifeq "$(wildcard config.php)" ""
	@echo =
	@echo =	You must create config.php file first
	@echo =	Start by copying config.sample.php
	@echo =
	@exit 1
endif

updatecode:
ifneq "$(wildcard .git )" ""
	git submodule init
	git submodule update
endif

updateusers:
	cd users && $(MAKE)
