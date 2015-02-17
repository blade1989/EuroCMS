@echo off
title back it up
:home
cls
echo ÉÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍ»
echo º                                                      º
echo º typ A/B for the options                              º
echo º                                                      º
echo ÌÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍ¹
echo º                                                      º
echo º "A"=backup options                                   º
echo º                                                      º
echo º "B"=HARDDISK Options                                 º
echo º                                                      º
echo º                                                      º
echo ÈÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍ¼
set /p selection=Choose:
Goto %selection%
:A
cls
echo ÉÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍ»
echo º                                                      º
echo º typ 1 to start that backup                           º
echo º                                                      º
echo ÌÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍ¹
echo º                                                      º
echo º "A"=backup options                                   º
echo º  È1=Documents,Pictures,Music,Videos,Downloads        º
echo º                                                      º
echo º "B"=HARDDISK Options                                 º
echo º                                                      º
echo ÈÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍ¼
set /p selection=Choose:
Goto %selection%
:B
cls
echo ÉÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍ»
echo º                                                      º
echo º typ HD to start the disk check                       º
echo º                                                      º
echo ÌÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍ¹
echo º                                                      º
echo º "A"=backup options                                   º
echo º                                                      º
echo º "B"=HARDDISK Options                                 º
echo º  ÈHD=find and repair bad sectors                     º
echo º                                                      º
echo ÈÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍ¼
set /p selection=Choose:
Goto %selection%

:1
cls
if exist "%userprofile%\desktop" (set desk=desktop) else (set desk=Bureaublad)
if exist "%userprofile%\documents" (set docs=documents) else (set docs=mijn documenten)
if exist "%userprofile%\pictures" (set pics=pictures) else (echo cant find %userprofile%\pictures)
if exist "%userprofile%\music" (set mus=music) else (echo cant find %userprofile%\music)
if exist "%userprofile%\Videos" (set vids=videos) else (echo cant find %userprofile%\videos)
if exist "%userprofile%\Downloads" (set down=downloads) else (echo cant find %userprofile%\Downloads)
cls
echo. examples (D:\) (D:\Backup) (D:\Backup\18-4-2011)
echo.
echo. if there is no "D:\backup" folder then the folder will be created
echo. 
set drive=
set /p drive=storage:
echo start>>backup.log
echo Name:%username%>>backup.log
echo Date:%date%>>backup.log 
echo Time:%time%>>backup.log
echo ========================================%docs%===========================================>>backup.log
echo %docs%  
echo Source:"%userprofile%\%docs%" 
echo Destination:"%drive%\%username%\%docs%"
echo %time%>>backup.log
xcopy "%userprofile%\%docs%" "%drive%\%username%\%docs%" /E /I>>Backup.log
echo 20%%
cls
echo ========================================"%pics%"=========================================>>backup.log
echo "%pics%" 
echo Source:"%userprofile%\%pics%" 
echo Destination:"%drive%\%username%\%pics%"
echo %time%>>backup.log
xcopy "%userprofile%\%pics%" "%drive%\%username%\%pics%" /E /I>>Backup.log
echo 40%%
cls
echo ========================================"%mus%"=========================================>>backup.log
echo "%mus%" 
echo Source:"%userprofile%\%mus%" 
echo Destination:"%drive%\%username%\%mus%" 
echo %time%>>backup.log
xcopy "%userprofile%\%mus%" "%drive%\%username%\%mus%" /E /I>>Backup.log
echo 60%%
cls
echo ========================================"%vids%"========================================>>backup.log
echo %vids% 
echo Source:"%userprofile%\%vids%" 
echo Destination:"%drive%\%username%\%vids%"
echo %time%>>backup.log
xcopy "%userprofile%\%vids%" "%drive%\%username%\%vids%" /E /I>>Backup.log
echo 80%%
cls
echo ========================================"%down%"========================================>>backup.log
echo "%down%" 
echo Source:"%userprofile%\%down%" 
echo Destination:"%drive%\%username%\%down%"
echo %time%>>backup.log
xcopy "%userprofile%\%down%" "%drive%\%username%\%down%" /E /I>>Backup.log
echo end>>backup.log
echo %username% %date% %time%>>backup.log
echo 100%%
cls
echo backup Compleet

copy "backup.log" "%drive%\%username%"
del "backup.log"
pushd "%drive%\%username%"
echo close backup.log to continue with backup script
"backup.log"
echo press any key to retun to the main menu
pause>nul
goto :home

:HD
echo finds and repairs bad sectors
echo typ in harddisk letter (C: D: E:)
set HD=
set /p HD=Hard Disk:
chkdsk %HD% /F /R /X
pause
goto :home
