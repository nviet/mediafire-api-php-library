## ChangeLog for MediaFire API PHP Library

Version 0.33 (22-Feb-2013)

- Added new properties: fbAccessToken, uploadResult, uploadStatus, uploadFileError
- Removed method: userRegister
- Updated class's file uploading example

---

Version 0.32 (20-Dec-2012)

- Added new methods: userFetchTos, userAcceptTos

---

Version 0.31 (31-Oct-2012)

- Minor bug fixes

---

Version 0.3 (23-Sep-2012)

- All method names now will be in camelCase formatting
- Added new methods: fileCopy, fileGetLinks, fileCollaborate, folderGetDepth,
folderGetSiblings, folderSearch, folderGetContent, systemVersion, systemInfo,
systemSupportedMedia, systemEditableMedia, systemMimeTypes, mediaConversion
- Changed methods' behaviour: folderGetInfo, fileOneTimeDownload
- Removed methods user\_myfiles (use folderGetContent instead), user\_login,
file\_upload\_type
- Removed properties: \_upload\_config, cookies, \_version
- Added support for native Upload API and Media Conversion API
- Updated class's example

---

Version 0.2 (01-Aug-2012)

- Minor fixes
- Support generating 1-time download link for files (see method
"file\_1time\_download")

---

Version 0.1 (14-Jul-2012)

- Initial release