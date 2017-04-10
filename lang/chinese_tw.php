<?php
/**
 * 語系庫
 *
 * 繁體中文語系庫
 * 命名規則:頭字大寫,不使用_
 *.
 * @author Ryan Chiu <[email]ryan@inetar.net[/email]>
 * @version 1.0
 * @date 2009-5-6 10:10:47
 */

$l="chinese_tw";
$lang_type[$l]='正體中文';
#從以下開始修改
$w=$lang[language];

// f_ 代表是有格式的訊息 format
// m_ 代表是訊息

# 通用辭語
$w['Network']='網路';
$w['Back']='返回';
$w['Day']='天';
$w['Hour']='時';
$w['Minute']='分鐘';
$w['Second']='秒';
$w['Title']='標頭名稱';
$w['Value']='值';
$w['Readme']="使用說明";
$w["Manage"]="管理";
$w['CreateDate']='創建日期';
$w['Filter']='條件篩選';
$w['Keyword']='關鍵字';
$w['Limit']='限制';
$w['Browse']='瀏覽';
$w['Search']='搜尋';
$w['Cancel']='取消';
$w['DelSeleted']='刪除勾選';
$w['Detail']='詳細';
$w['Delete']='刪除';
$w['QuotaStatus']='您共可產生 %d 個序號,已產生 %d 個序號,仍可再產生 %d 個序號';
$w['Save']="儲存設定";
$w['InputSelf']="自行輸入";
$w['SelectSelf']="下拉選擇";
$w['Multichoice']='多選';
$w["Choose"]="請選擇";
$w["Unlimit"]="不限制";
$w["Keep"]="不變更";
$w["Limit"]="限制";
$w["Add"]="添加";
$w["Open"]="開啟";
$w["Close"]="關閉";
$w["Remove"]="移除";
$w["Preview"]="預覽";
$w['Pending']='待審';
$w['Modify'] = '修改';
$w['ModifyCofirm'] = '修改確認';
$w['Homepage']='首頁';
$w['Description']='描述';
$w['Global']='全域';
$w['Uploader']='上傳者';
$w['Update']='更新';
$w['Finished']='完成';
$w['Success']='成功';
$w['UpdateFinish']=$w['Update'].'完成';
$w['m_UpdateSuccess']='更新成功';
$w['m_InsertSuccess']='新增成功';
$w['m_DeleteSuccess']='刪除成功';
$w['m_ConfirmDelBelow']='請確認刪除以下資料';
$w['m_PageStatus']='目前 %d 頁 , 共  %d 頁 ,  共  %d 筆資料';

$w['m_InputEnglishNumberUnigue']="請輸入文字或正整數數字,每個使用者的代碼需是唯一不可重覆";
$w['m_InputEnglishNumber']="請輸入英文或數字";
$w['m_InputChineseEnglishNumber']="請輸入中文、英文或數字";
$w['m_InputUserEmail']="請輸入使用者郵件";

$w['f_RecPageStatus']='共  %d 筆資料, 共 %s';
$w['f_PersonalRecStatus']='您已經閱讀了共 %s , 尚有 %s';
$w['f_PersonalRecNotEnough']='您已經閱讀了共 %s , 目前點數不足';


//Announcement
$w['Announcement']='公告';
$w['AnnouncementSubject']=$w['Announcement'].'標題';
$w['AnnouncementStatus']=$w['Announcement'].'狀態';
$w['AnnouncementText']=$w['Announcement'].'內容';
$w['AnnouncementRange']=$w['Announcement'].'範圍';
$w['AnnouncementAdd']='新增'.$w['Announcement'];
$w['AnnouncementUpdateDate']=$w['Announcement'].'更新日期';

//Discuss
$w['Discuss']='討論';
$w['Post']='發表';
$w['PostTime']=$w['Post'].'時間';
$w['DiscussCount']='討論篇數';

$w['_FormatCharge']='￥%s元';
$w['ManagerUI']='管理後臺';

$w['CompanyIntroduct']='公司簡介';

/* 文章部分 */
$w['NewDiscuss'] = '最新文章';
$w['NewNotice'] = '最新公告';


/*
 * 成員
 */

$w['Member']='成員';
$w['MemberManage']=$w['Member'].'管理';

//Message
$w['Message']='訊息';
$w['PublishMessageToMember']='發佈訊息給'.$w['Member'];
$w['Subject']='發佈主題';
$w['MessageType']='訊息種類';
$w['Content']='內容';
$w['MemberCount']=$w['Member'].'數';
$w['f_MsgTpl_Exam']='各位同學大家好，測試已經開始，請各位準時參加考試。';
$w['f_MsgTpl_Course']='各位同學大家好，这是个好課程。';
$w['f_MsgTpl_Homework']='各位同學大家好，作業已經派出，請各位按規定繳交。';
$w['f_MsgTpl_Pavilion']='各位同學大家好。';

//服務啟用
$w['active_service']='啟用服務';
$w['active_now']='立即啟用';

//分類
$w['Null']='暫無子分類';
$w['goods_menu']='商品章節';

$w['Total']='全部';



#Course
$w["Course"]="講解檔";
$w["CourseInfo"]=$w["Course"].'信息';
$w["CourseManage"]=$w["Course"]."管理";
$w["CourseAdd"]="增加".$w["Course"];
$w['CreateTime']='建立日期';
$w['BrowserCount']='瀏覽數';
$w['TotalTime']='總時數';
$w["CourseList"]=$w["Course"]."列表";
$w["CourseID"]=$w["Course"]."代碼";
$w["CourseName"]=$w["Course"]."名稱";
$w['CourseNews']=$w["Course"]."最新信息";
$w['CourseDesc']=$w["Course"]."描述";

$w['m_ConfirmDelCourse']='請確認要刪除以下選讀的'.$w["Course"];

$w['TeacherIntroduce']='講師介紹';

$w["AddRuleForCourse"]="增加安全規則綁定";
$w['AddRuleForCourseDesc']='(目前這個'.$w['CourseGroup'].'沒有綁定任何安全規則,請透過右欄選項增加綁定)';

$w['CourseGroup']=$w["Course"].'群組';
$w['CourseGroupAdd']='增加'.$w['CourseGroup'];
$w['CourseGroupManage']=$w['CourseGroup'].'管理';
$w['CourseGroupName']=$w['CourseGroup'].'名稱';
$w['CourseGroupID']=$w['CourseGroup'].'編號';
$w['CourseGroupDesc']=$w['CourseGroup'].'描述';
$w['CourseGroupMember']='包含的'.$w["Course"];

$w['AddMember']='添加為正式'.$w['Member'];
$w['AddMemberForCourseGroup']='添加為'.$w['CourseGroup'].$w['Member'];
$w['AddMemberForCourseGroup']=$w['CourseGroup'].'目前無'.$w['Member'].',請自行添加';


$w['m_ConfirmRemoveSelected']='是否移除以下選取的對像';
$w['m_ConfirmRemoveMember']='是否移除以下'.$w['Member'].'?';

$w['m_ModifyCouseSuccess']='修改'.$w["Course"].'資訊成功';
$w['m_ModifyCouseFailed']='修改'.$w["Course"].'資訊失敗,'.$w["Course"].'名稱不可以重覆';

$w['m_InputCouseGroupName']='請輸入'.$w['CourseGroup'].'名稱';
$w['m_CouseGroupNameDuplicate']=$w['CourseGroup'].'名稱重覆';
$w['m_AddCouseGroupSuccess']='增加'.$w['CourseGroup'].'成功';
$w['m_AddCouseGroupFailed']='增加'.$w['CourseGroup'].'失敗';
$w['m_UpdateCouseGroupSuccess']='更新'.$w['CourseGroup'].'成功';
$w['m_UpdateCouseGroupFailed']='更新'.$w['CourseGroup'].'失敗';

$w['m_ErrorCourseName']='你所輸入的'.$w['Course'].'名稱不正確';
$w['m_HadJoin']="已是".$w['CourseGroup']."成員";
$w['m_JoinCouseGroupSuccess']='加入'.$w['CourseGroup'].'成功';



#TemplateMangement
$w['TemplateMangement']='版面管理';
$w['LogoAD']='圖標廣告';
$w['Place']='擺放位址';
$w['FileURL']='引用網址';
$w['Update']='更新';
$w['TopLOGOURL']='頂端圖標';
$w['MainPageADURL']='主頁廣告';
$w['Assign']='分派';
$w['SelfUpload']='自行上傳';
$w['FileName']='檔案文件名稱';

$w['SiteManage']='網站管理';
$w['BoardInfo']='版面資訊';
$w['Marquee']='跑馬燈';
$w['SiteTitle']='網站名稱';
$w['DefaultDisplayMode']='預設的顯示方式';
$w['List']='列表';
$w['Grid']='圖格';
$w['Text']='純文字';
$w['DefaultStyle']='預設風格';
$w['DefaultLang']='預設語系';

$w['TermSetting']='名詞設定';
$w['PowerSetting']='權限管理';
$w['DefaultPower']='預設權限';
$w['NoPower']='權限不足(Guest)';

$w['Active']='啟用';
$w['ActiveMode']=$w['Active'].'模式';
$w['ActiveDirectly']='直接'.$w['Active'];
$w['ActiveByEmail']='由電子郵件'.$w['Active'];
$w['ActiveByManual']='由後台手工'.$w['Active'];
$w['WaitForManualActive']='等待管理人員'.$w['Active'];
$w['SendActiveEmail']='寄送驗証郵件';
$w['SentAuthEmail']='驗証郵件已寄送,請注意查收';
$w['WaitForActive']='您的帳號需要'.$w['Active'];
#My
$w['MyData']='我的資訊';
$w['MyAccount']='我的帳號';

$w['FillNullIfNotModify']='不修改請留空白';

#System
$w['System']='系統管理';
$w['AuthUnit']='授權單位';
$w['GlobalRule']='全域規則';
$w['AuthProduceName']='授權產品名稱';
$w['MacAddress']='硬體碼';
$w['ServerUnusual']='服務器異常';
$w['SN']='授權序號';
$w['InstalledSN']='已安裝的授權序號';
$w['m_UpdateSNSuccess']='更新'.$w['SN'].'成功';
$w['SNError']=$w['SN'].'不正確';
$w['ServiceTimeOverTime']='服務已到期,請速和供應商連絡';
$w['UpdateSN']='更新授權';
$w['DeleteSN']='刪除授權';
$w['ProduceSN']='授權碼產生';
$w['NetworkIP']='网路IP';
$w['NetworkMask']='网路遮罩';
$w['NetworkGateway']='网路闸口';
$w['EmailSet']='電子郵件設定';
$w['SytemUploadFiles']='上傳系統檔案';

#System / Database
$w['Database']='數據庫';
$w['DatabaseMaintain']=$w['Database'].'維護';
$w['DatabaseBackup']=$w['Database'].'備份';
$w['DatabaseRestore']=$w['Database'].'還原';


#SMTPHost
$w['SMTPHost']='SMTP 位址';
$w['SMTPUusername']='SMTP 帳號';
$w['SMTPPassword']='SMTP 密碼';
$w['SMTPPort']='SMTP 端口';
$w['BoardEmail']='寄信人名稱';
$w['SMTPSSL']='是否採用SSL傳輸';

#DRM

$w['CourseType']='授權方式';
$w['Course_Open']='按設定規則';
$w['Course_Free']='不設限制';

$w['DRMUpdate']='變更DRM位址可能需要運行一段時間,請耐心等候';
$w['DRMUpdateFinish']='變更DRM位址完成';

#Pavilion
$w['Speaker']='講師';
$w['Pavilion']=$w['L_Pavilion'];
$w['PavilionInfo']=$w['Pavilion'].'信息';
$w['MyPavilion']='我的'.$w['Pavilion'];
$w['PavilionList']=$w['Pavilion'].'總覽';
$w['PavilionName']=$w['Pavilion'].'名稱';
$w['PavilionManager']=$w['Pavilion'].'管理員';
$w['PavilionAdd']='添加'.$w['Pavilion'];
$w['PavilionAddTime']=$w['Pavilion'].'上架日期';
$w['PavilionDisplay']='顯示'.$w['Pavilion'];
$w['PavilionManage']='管理'.$w['Pavilion'];
$w['PavilionDesc']=$w['Pavilion'].'描述';
$w['PavilionThum']=$w['Pavilion'].'縮圖';
$w['GoodsProperties']='屬性';
$w['GoodsType']='種類';
$w['PricePlan']='價格方案';
$w['ShopPrice'] = '本店售價';
$w['MarketPrice'] = '市場價格';
$w['PromoteActive']='啟用促銷方案';
$w['PromotePrice'] = "促銷價：";
$w['PromoteStartDate'] = "促銷開始日期：";
$w['PromoteEndDate'] = "促銷結束日期：";
$w['m_UpdatePavilionSuccess']='更新'.$w['Pavilion'].'成功';

$w['PavilionSerialNumber']=$w['Pavilion'].'編號';
$w['PavilionClickCount']=$w['Pavilion'].'點擊次數';

$w['Category'] = '分類';
$w['Menu']='章節目錄';
$w['CatID'] = '分類編號';
$w['CatName'] = '分類名稱';
$w['DefaultCatName'] = '預設分類名稱,請按兩下修改';
$w['m_CategoryNoExists'] = '分類不存在';
$w['m_CategoryNull'] = '請選擇分類';
#wupeter
$w['m_SpeakerNull']='講師欄位不得為空';
$w['m_TotalTimeNull']='總時數欄位不得為空';


$w['m_ConfirmDelCategory']='該分類所屬的子分類將一併刪除,是否確定刪除此分類?';
$w['m_InputPavilionName']='請填寫'.$w['PavilionName'];
$w['m_InputPavilionManager']='請填寫'.$w['PavilionManager'];

$w['m_PavilionNameDuplicate']=$w['PavilionName'].'已經存在';
$w['m_AddPavilionSuccess']=$w['PavilionAdd'].'成功';
$w['m_UpdateGoodsPropertiesSuccess']='更新'.$w['GoodsProperties'].'成功';

$w['m_AddPavilionFailed']=$w['PavilionAdd'].'失敗';
$w['m_PavilionManagerNoExists']=$w['PavilionManager'].'不存在';
$w['m_AddCategorySuccess']='新增'.$w['Category'].'成功';

$w["m_ConfirmDelPavilion"]="是否確定刪除下列".$w['Pavilion'];

$w['InstallPavilionMouduleConfirm']='是否安裝主題館模組';

$w['PlayBST']='播放'.$w['Course'];


#Cart
$w['Cart']=$w['L_Cart'];
$w['CartInfo'] = '您的'.$w['Cart'].'中有 %d 件'.$w['Pavilion'].'，總計金額 %s。';
$w['CartList'] = $w['Cart'].'列表';

$w['CheckOut']='結帳';
$w['ContinueToBuy']='繼續購物';

#Exam
$w['Exam']='測驗';
$w['ExamInfo']=$w['Exam'].'信息';
$w['ExamPaper']='測驗卷';
$w['ExamPaperTitle']=$w['ExamPaper'].'名稱';
$w['ExamPaperManage']=$w['ExamPaper'].'管理';
$w['ExamPaperClose']=$w['ExamPaper'].'已關閉';
$w['ExamPaperDesc']=$w['ExamPaper'].'描述';
$w['ExamNews']=$w['Exam'].'最新信息';


$w['ExamTitle']=$w['Exam'].'名稱';
$w['ExamAnswerTime']=$w['Exam'].'作答時間';
$w['ReferenceAnswer']='參考答案';
$w['Answer']='答案';
$w['OptionItemInfo']='選項訊息';
$w['PassingGrade']='及格分數';
$w['TotalGrade']='總分';
$w['Pass']='合格';
$w['Unpass']='不合格';
$w['WithoutGrade']='未評分';
$w['QuizPickStyle']='出題方式';
$w['QuizPickBySeq']='試題依順序列出';
$w['QuizPickByRandom']='試題不依順序列出';
$w['QuizItem']='試題答案選項';
$w['QuizItemSortStyle']=$w['QuizItem'].'按顺序排列';
$w['QuizBase']='題庫';
$w['AddFromQuizBase']='從題庫添加';
$w['ConnectionSID']='關連的試題編號';
$w['ExamDescription']=$w['Exam'].'說明與介紹';
$w['ExamPaperForCourse']='關連的'.$w['Course'];
$w['MakeUpExamCount']='可補考次數';
$w['SerialNumber']='序號';

$w['ExamPaperStatus']=$w['ExamPaper'].'狀態';
$w['Examinee']='考生';
$w['ExamineeList']=$w['Examinee'].'列表';
$w['ExamineeAnwer']=$w['Examinee'].'答案';
$w['ExamineeScores']=$w['Examinee'].'得分';
$w['PassStatus']='合格狀態';
$w['TotalCorrectCount']='答對的題數';
$w['SpendTime']='花費的時間';
$w['ExamTime']='考試時間';

$w['ReviewTestPaper']='閱卷';

$w['TestPaper']='試題卷';
$w['TestPaperID']=$w['TestPaper'].'編號';
$w['TestPaperProperty']=$w['TestPaper'].'屬性';
$w['QuizInTestPaper']=$w['TestPaper'].'試題';


#試題
$w['Quiz']='試題';
$w['QuizManage']=$w['Quiz'].'管理';
$w['QuizList']=$w['Quiz'].'列表';
$w['QuizForExamPaper']='關連的'.$w['ExamPaper'];
$w['Question']='試題題目';

$w['QuizSectionID']='題號';
$w['QuizManage']='試題管理';
$w['QuizInfo']='試題資訊';
$w['QuizList']='試題列表';
$w['QuizID']='試題編號';
$w['QuizSubject']='試題題目';
$w['QuizType']='試題類型';

$w['QuizLevel']='難易度';
$w['QuizAdd']='新增試題';

$w['SingleChoose']='單選題';
$w['MultiChoose']='複選題';
$w['ShortAnswer']='簡答題';
$w['Fill']='填充題';
$w['BossAuth']='主管題';
$w['Mix']='混合題';

$w['CorrectAnwer']='正確答案';
$w['Scores']='本題配分';
$w['ExamineeScores']='考生得分';
$w['KnowledgePoint']='知識點';
$w['SharePermission']='分享權限';


$w['Beginner']='入門';
$w['Easy']='容易';
$w['Normal']='一般';
$w['Hard']='稍難';
$w['Experienced']='專家';




$w['m_ChooseNull']='您必需選擇答案';
$w['m_QuizContentNull']='請填寫試題內容';


#Cart
$w['PayStatus']='支付狀態';
$w['WaitForCheckOut']='未結帳';
$w['WaitForPay']='未付款';
$w['WaitForAuth']='已付款,等待賣家授權';
$w['WaitBuyerConfirmGoods']='等待買家確認授權';
$w['AuthFinish']='已授權';


#閱讀紀錄
$w['ReadRecord']='閱讀紀錄';
$w['ReadRecordList']=$w['ReadRecord'].'列表';
$w['ReadRecordDate']=$w['ReadRecord'].'時間';
$w['ReadRecordPassTime']=$w['ReadRecord'].'歷時';
$w['ReadRecordTotalTime']='總閱讀時數';
$w['FirstReadRecord']='最初學習時間';
$w['LastReadRecord']='最後學習時間';
$w['HDSerial']='機器特徵碼';
$w['ReadHDSerialList']='訪問'.$w['HDSerial'].'列表';


#Homework
$w['Homework']='作業';
$w['HomeworkInfo']=$w['Homework'].'信息';
$w['HomeworkNews']=$w['Homework'].'最新消息';
$w['HomeworkTitle']=$w['Homework'].'名稱';
$w['HomeworkOfCourse']='綁定的'.$w['Course'];
$w['m_InputHomeworkTitle']='請輸入'.$w['HomeworkTitle'];
$w['Deadline']='交付期限';
$w['PayType']='交付類型';
$w['PayOnline']='在線交付';
$w['PayByPaper']='書面交付';
$w['ReviewHomework']='批改'.$w['Homework'];
$w['Grade']='得分';
$w['HomeWorkDesc']=$w['Homework'].'描述';
$w['HomeWorkExamFile']=$w['Homework'].'範例文件';
$w['MaxPostSize']='最大可以上傳的檔大小';
$w['PayStatus']='繳交情形';
$w['PayDate']='繳交日期';
$w['PayNothing']='未繳交';
$w['Paid']='已繳交';
$w['SelUploadFile']='選擇上傳檔案';
$w['m_UpdateHomeworkSuccess']='更新'.$w['Homework'].'成功';
$w['m_InsertHomeworkSuccess']='新增'.$w['Homework'].'成功';

#User
$w['User']='使用者';
$w['StudentID']='學員編號';
$w['UserManage']='使用者管理';
$w['UserDepartment']='部門';
$w['UserAdd']='添加使用者';
$w['UserImportXLS']='匯入使用者';
$w['UserFileLocation']='使用者檔案位址';
$w['ExampleFileDownload']='下載使用者匯入範例檔';
$w['City']='居位城市';
$w['user_birth_year']='生年';
$w['WaitForUserFileParsing']='使用者文件解析中';

$w['UserList']='使用者列表';
$w['UserName']='使用者帳號';
$w['UserEmail']='使用者電子郵件';
$w['m_UserEmailError']='電子郵件錯誤';
$w['UserID']=$w['User'].'編號';
$w['UserRealName']='使用者姓名';
$w['RegisterDate']='註冊日期';
$w['LastIP']='上次登入IP';
$w['RegisterIP']='註冊IP';
$w['LastDate']='上次登入日期';



$w['UserDesc']='使用者備註';
$w['isDisable']='是否失效';
$w['UserType']='使用者類別';
$w['UserPassword']='使用者密碼';
$w['UserCurrentPassword']='使用者目前的密碼';
$w['NewUserPassword']='使用者新密碼';
$w['UserCofirmPassword']='確認密碼';
$w['LastLoginRec']='最近登錄紀錄';

$w['UserPasswordIntensity']='使用者密碼強度';

$w['Birthday']='生日';
$w['Sex']='性別';
$w['Male']='男性';
$w['Female']='女性';
$w['HomePhone']='家庭電話';
$w['OfficePhone']='辦公室電話';
$w['MobilePhone']='行動電話';
$w['Address']='住址';
$w['Trial']='試用';
$w['TrialUser']='試用帳號';
$w['TrialUserApply']='申請'.$w['TrialUser'];
$w['TrialUserList']=$w['TrialUser'].'列表';

$w['Proposer']='申請人';

$w['UserExtensionFileds']='使用者自定義欄位';
$w['UserExtensionFiledsID']=$w['UserExtensionFileds'].'編號';
$w['UserExtensionFiledsName']=$w['UserExtensionFileds'].'名稱';
$w['UserExtensionFiledsType']=$w['UserExtensionFileds'].'種類';
$w['UserExtensionFiledsList']=$w['UserExtensionFileds'].'列表';
$w['UserExtensionFiledsSort']=$w['UserExtensionFileds'].'排序';

$w['UserExtensionFiledsDetail']=$w['UserExtensionFileds'].'詳細';
$w['UserExtensionFiledsList']=$w['UserExtensionFileds'].'列表';


$w['UserExtensionFiledsOthers']=$w['UserExtensionFileds'].'其他';

$w['UserExtensionVarcharDesc']='100字節以內的字串';
$w['UserExtensionTextDesc']='不限字節的字串';
$w['UserExtensionSexDesc']='性別格式';
$w['UserExtensionEmailDesc']='電子郵件格式';
$w['UserExtensionDateDesc']='日期格式';
$w['UserExtensionYearDesc']='西元年格式';
$w['UserExtensionSelectDesc']='選擇題格式';
$w['UserExtensionCityDesc']='城市格式';
$w['UserExtensionSystemDesc']='使用者無法修改的格式';




$w['UserExtensionOption']='是否必選';
$w['m_ConfirmDelUserExtensionFileds']='確認是否刪除'.$w['UserExtensionFileds'];

$w['m_CurrentPasswordEmpty']='請填寫'.$w['UserCurrentPassword'];
$w['m_NewPasswordEmpty']='請填寫新的'.$w['UserPassword'];
$w['m_ConfirmPasswordEmpty']='請填寫'.$w['UserCofirmPassword'];
$w['m_PasswordDifferent']='兩次填寫的密碼不一致';
$w['m_PasswordTheSame']='新舊密碼是一樣的';

$w['m_ConfirmRomove']='是否確認移除...';

$w['m_ConfirmDelUser']='是否確定刪除下列使用者?';

$w['m_AddUserSuccess']='添加使用者資訊成功';
$w['m_AddExistsUserSuccess']='添加使用者資訊成功,這個使用者之前已存在用戶中心資料庫,可能有自己的密碼。';
$w['m_AddUserFailed']='添加使用者資訊失敗';
$w['m_AddExistsUser']='資料庫已有此筆使用者資訊,無法再進行添加';
$w['m_UpdateUserSuccess']='更新使用者資訊成功';
$w['m_UpdateUserFailed']='更新使用者資訊失敗';


$w['m_InputUserName']='請輸入使用者帳號';
$w['m_InputUserRealName']='請輸入使用者姓名';
$w['m_InputUserPassword']='請輸入使用者密碼';
$w['m_ChooseUserType']='請選擇使用者類型';
$w['m_UserNameDuplicate']='使用者名稱已經存在,請更換';
$w['m_UserEmailDuplicate']='使用者電子郵件已經存在,請更換';
$w['m_UserDuplicate']='使用者名稱或電子郵件已經存在,請更換';

#Upload User Excel
$w['Table']='工作表';
$w['CheckTable']='檢查'.$w['Table'];
$w['StartToCheckTable']='開始'.$w['CheckTable'];
$w['UserTableNotFound']='未發現使用者'.$w['Table'];

$w['f_FiledErrorMessage']='欄位(%s)應該為<b>%s</b>';
$w['f_ExcelUpdateSuccess']='第 %s 行,更新使用者編號 %s 的資料,帳號:<b> %s </b>';
$w['f_ExcelUpdateDuplicate']='第 %s 行,帳號 <b> %s </b> 或邮件 <b> %s </b>已經存在';
$w['f_ExcelInsertSuccess']='第 %s 行,新增使用者 <b> %s </b>成功';
$w['f_ExcelFieldVauleExist']='第 %s 行,使用者 <b> %s </b>已經存在';
$w['f_ExcelInsertExistsSuccess']='第 %s 行,新增使用者 <b> %s </b>成功,這個使用者之前已存在用戶中心資料庫,可能有自己的密碼。';

$w['f_TotalCount']='共有 %s 筆資料';
#UserGroup
$w['UserGroup']='使用者群組';
$w['UserGroupAdd']='增加使用者群組';
$w['UserGroupManage']='使用者群組管理';
$w['UserGroupName']='使用者群組名稱';
$w['UserGroupID']='使用者群組編號';
$w['UserGroupDesc']='使用者群組描述';
$w['UserGroupMember']='群組'.$w['Member'];

$w['m_InputUserGroupName']='請輸入使用者群組名稱';
$w['m_UserGroupNameDuplicate']='使用者群組名稱重覆';
$w['m_AddUserGroupSuccess']='增加使用者群組成功';
$w['m_AddUserGroupFailed']='增加使用者群組失敗';
$w['m_UpdateUserGroupSuccess']='更新使用者群組成功';
$w['m_UpdateUserGroupFailed']='更新使用者群組失敗';


$w['Company']='企業';
$w['CompanyID']='企業代碼';
$w['CompanyDesc']='企業描述';
$w['CompanyList']='企業列表';
$w['CompanyName']='企業名稱';
$w['CompanyAdd']='添加新企業';
$w['CompanyManage']='企業管理';
$w['ChangeQuotaCount']='異動授權數量';
$w['CompanyManagerAcc']='企業管理員帳號';
$w['CompanyManagerPassword']='企業管理員密碼';
$w['m_ChangeQuotaCountTooMore']='異動授權數量超過原先的授權數量';
$w['m_AddCompanySuccess']='新增企業資訊成功';
$w['m_UpdateCompanySuccess']='更新企業資訊成功';
$w['m_UpdateCompanyFailed']='更新企業資訊失敗';
$w['m_CompanyNameDuplicate']='企業名稱重覆';
$w["m_ConfirmDelCompany"]="是否確定刪除下列企業?";

$w['m_ErrorUserName']="你所輸入的使用者帳號不正確";
$w['m_HadJoinUserGroup']="該員已是群組成員";


#Login
$w['UserLogin']='用戶登入';
$w["LoginAccount"]="登入帳號";
$w['Password']="密碼";
$w['Login']="登入";
$w['Logout'] = '退出';

$w['Regist']="註冊新帳號";
$w['PasswordLegal']='密碼合法可註冊';
$w['UnagreeAgreement'] = '您沒有接受協議';
$w['RemberMyInfo']='記住我的帳號';
$w['NewPasswordRestSucess']='您的密碼已重置完成';
$w['NewPasswordMemo']='基於安全考量,系統將重置您的登入密碼,並寄送新密碼到您的電子郵件地址';
$w['UserInfoError']='您所輸入的使用者信息不正確';

$w['Manual']='平台使用说明';

#Acode
$w["StatementOfAccount"]="對帳(查詢)";
$w["Acode"]="授權序號";
$w["AcodeMange"]="授權序號管理";
$w["AcodeAdd"]="增加授權序號";
$w["AcodeTotalCount"]="授權序號數量";
$w["AcodeUsedCount"]="已使用的授權序號數量";
$w["AcodeBalence"]="剩餘的授權序號數量";
$w["AcodeShare"]="授權序號使用率";
$w["AcodeList"]="授權序號列表";
$w['AcodeForCourse']="綁定的".$w['CourseGroup'];
$w['AcodeForRule']="綁定的安全規則";
$w['AcodeCreateDate']='授權序號產生時間';
$w['AcodeRequstAuthDate']='索取授權時間';
$w['ProductAcode']='產生序號';
$w['ProduceCount']='產生數量';
$w['ConfirmProduce']='是否確認產生?';
$w['Export']='匯出列表';
$w['ShowAll']='顯現全部';
$w['ShowAuth']='只顯現已索取授權';
$w['ShowUnauth']='只顯現未索取授權';

$w['RequestedPerson']='索取授權人員';

$w['m_ErrorAcodeRequstAuthDate']='授權序號索取時間格式錯誤或欠缺';
$w['m_NoEnoughQuota']='您目剩餘的授權序號數量為%d筆,無法產生%d授權序號,請充值後再進行產生。';
$w['m_NoCourse']='請輸入產生的授權序號所綁定的'.$w['CourseGroup'];
$w['m_NoRule']='請輸入產生的授權序號所綁定的安全規則';
$w['m_NoProduceCount']='請輸入產生的授權序號數量';
$w['m_IllegalWord']='授權序號數量請輸入半型的數字';
$w['m_CourseNameNoExists']=$w['CourseGroup'].'名稱不存在';
$w['m_RuleNameNoExists']='安全規則名稱不存在';


#安全規則
$w["Rule"]="規則";

$w["RuleID"]="規則代碼";
$w["RuleManage"]="規則管理";
$w["RuleAdd"]="新增規則";
$w["RuleList"]="規則列表";
$w["RuleName"]="規則名稱";
$w["RuleDesc"]="規則描述";
$w["StarTime"]="生效時間";
$w["EndTime"]="失效時間";
$w["UsageCount"]="播放次數";
$w["MachineCount"]="播放台數";
$w["UsageDays"]="授權後有效天數";

$w["TimeQuota"]='可閱讀的秒數';


$w["DefaultRuleNameFormat"]="建立於%s的規則";




/*
 * MyWall
 */

$w['Wall']='信息牆';
$w['MyWall']='我的'.$w['Wall'];
$w['Recevie']='收到';
$w['Hits']='人氣';
$w['JustNow']='剛剛';
$w['f_MinuteAgo']='%s分鐘前';
$w['f_HourAgo']='%s小時前';
$w['f_DayAgo']='%s小時前';
/*
 * Manager
 */
$w['Manager']='管理者';
$w['Guest']='訪客';

/*
 * Bill
 */
$w['OrderList']='訂購清單';
$w['OrderTime']='訂購時間';
$w['OrderNumber']='訂購序號';
$w['OrderStatus']='訂單狀態';
$w['OrderTotalMoney']='應付金額';
$w['MyInfomation']='我的訊息';
$w['MyProfile']='我的基本資訊';
$w['Pay']='支付';

$w['Bills']='訂單';
$w['BillsManage']='訂單管理';

$w['m_PowerAlert']='請注意,系統已授予該用戶可以閱讀此訂單的閱讀權,若更改狀態亦無法回收閱讀權限';
$w['f_ChangeBillStatus']='更改訂單狀態,由"%s"改到"%s"';


//錯誤訊息(m_開頭)
$w["m_InputRuleName"]="請輸入安全規則名稱";
$w["m_InputCompanyName"]="請輸入企業名稱";


$w["m_ChooseIfLimitUsageCount"]="請選擇是否限制播放次數";
$w["m_InputUsageCount"]="請輸入播放次數";
$w["m_InputUsageCountError"]="播放次數需大於0次";

$w["m_ChooseIfLimitUsageDays"]="請選擇是否限制使用天數期限";
$w["m_InputUsageDays"]="請輸入可以使用的天數";
$w["m_InputUsageDaysError"]="可以使用的天數需大於0次";

$w["m_ChooseIfLimitStartDate"]="請選擇是否限制生效時間";
$w["m_Input_LimitStartDate"]="請輸入生效時間";

$w["m_ChooseIfLimitEndDate"]="請選擇是否限制失效時間";
$w["m_Input_LimitEndDate"]="請輸入失效時間";

$w["m_LimitStartDateOverEnd"]="生效時間不得晚於失效時間";

$w["m_AddRuleSuccess"]="新增安全規則成功";
$w["m_UpdateRuleSuccess"]="更新安全規則成功";
$w["m_ConfirmDelRule"]="是否確定刪除下列安全規則?";

$w["m_DelRuleSuccess"]="刪除安全規則成功";

$w['SelectNothing']='您必需選取目標';
$w['RemoveSelected']='移除選取的目標';


$w['OnlyDigital']="只能輸入數字";
$w['CheckInput']='請檢查';

//安裝用詞
$w['Introduction']='介紹';
$w['Requirements']='安裝相容性檢查';
$w['DatabaseSettings']='資料庫設定';
$w['ConfigurationFile']='組態檔';
$w['CreateDatabaseTables']='創建資料庫表格';
$w['AdministratorDetails']='管理員設定';
$w['AdvancedSettings']='進階設定';
$w['FinalStage']='完成安裝';

//瀏覽器ActiveX安裝
$w['OnlyIE']='很抱歉,目前僅支援由IE瀏覽器進行播放!';
$w['InstallFirst']='需先安裝講解大師播放器才能觀看,是否現在下載?\r\n\r\n(此程式免費安裝使用)!';
$w['EnableAfterIERestart']='下載安裝後需重啟瀏覽器才能觀看';

//匯出成Execel的說明檔
$w['Column']='行';
$w['ImportUserXLSDesc']='匯入的使用者資料請登錄於工作表User, 其說明如下:';
$w['ImportFromSecRow']='注意:所有資料將從匯入工作表第二列開始讀取,每列代表一筆資料。';



$w['FirstPage']='第一頁';
$w['LastPage']='最末頁';

$w['Sort']='排序';
$w['SaveOrder']='儲存順序';
/**
 * ECSHOP 前臺語言檔
 * ============================================================================
 * 版權所有 2005-2009 上海商派網路科技有限公司，並保留所有權利。
 * 網站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 這不是一個自由軟體！您只能在不用於商業目的的前提下對程式碼進行修改和
 * 使用；不允許對程式碼以任何形式任何目的的再發佈。
 * ============================================================================
 * $Author: sxc_shop $
 * $Id: common.php 16924 2009-12-25 06:13:29Z sxc_shop $
*/

/* 使用者登錄語言項 */
$w['empty_username_password'] = '對不起，您必須完整填寫用戶名和密碼。';
$w['shot_message'] = "短消息";

/* 公共語言項 */
$w['sys_msg'] = '系統提示';
$w['catalog'] = '目錄';
$w['please_view_order_detail'] = '商品已發貨，詳情請到使用者中心訂單詳情查看';
$w['user_center'] = '用戶中心';
$w['shop_closed'] = '本店盤點中，請您稍後再來...';
$w['shop_register_closed'] = '該網店暫停註冊';
$w['shop_upgrade'] = "本店升級中，管理員從 <a href=\"admin/\">管理中心</a> 登錄後，系統會自動完成升級";
$w['js_languages']['process_request'] = '正在處理您的請求...';
$w['process_request'] = '正在處理您的請求...';
$w['please_waiting'] = '請稍等, 正在載入中...';

$w['plugins_not_found'] = "外掛程式 %s 無法定位";
$w['home'] = '首頁';
$w['back_up_page'] = '返回上一頁';
$w['close_window'] = '關閉窗口';
$w['back_home'] = '返回首頁';
$w['ur_here'] = '當前位置:';
$w['all_goods'] = '全部商品';
$w['all_recommend'] = "全部推薦";
$w['all_attribute'] = "全部";
$w['promotion_goods'] = '促銷商品';
$w['best_goods'] = '精品推薦';
$w['new_goods'] = '新品上市';
$w['hot_goods'] = '熱銷商品';
$w['view_cart'] = '查看購物車';
$w['catalog'] = '所有分類';
$w['regist_login'] = '註冊/登錄';
$w['profile'] = '個人資料';
$w['query_info'] = "共執行 %d 個查詢，用時 %f 秒，線上 %d 人";
$w['gzip_enabled'] = '，Gzip 已啟用';
$w['gzip_disabled'] = '，Gzip 已禁用';
$w['memory_info'] = '，佔用記憶體 %0.3f MB';

$w['shopping_and_other'] = '購買過此商品的人還購買過';



$w['shop_price'] = $w['ShopPrice'];
$w['market_price'] = $w['MarketPrice'];

$w['goods_brief'] = '商品描述：';
$w['goods_album'] = '商品相冊';

$w['promote_price'] = $w['PromotePrice'];

$w['fittings_price'] = '配件價格：';
$w['collect'] = '加入我的最愛';
$w['add_to_cart'] = '加入購物車';
$w['return_to_cart'] = '放回購物車';
$w['search_goods'] = '商品搜索';
$w['search'] = '搜索';
$w['wholesale_search'] = '搜索批發商品';
$w['article_title'] = '文章標題';
$w['article_author'] = '作者';
$w['article_add_time'] = '添加日期';
$w['relative_file'] = '[ 相關下載 ]';


$w['category'] = $w['Category'];
$w['brand'] = '品牌';
$w['price_min'] = '最小價格';
$w['price_max'] = '最大價格';
$w['goods_name'] = '商品名稱';
$w['goods_attr'] = '商品屬性';
$w['goods_price_ladder'] = '價格階梯';
$w['ladder_price'] = '批發價格';
$w['shop_prices'] = '本店價';
$w['market_prices'] = '市場價';
$w['deposit'] = '團購保證金';
$w['amount'] = '商品總價';
$w['number'] = '購買數量';
$w['handle'] = '操作';
$w['add'] = '添加';
$w['edit'] = '編輯';
$w['drop'] = '刪除';
$w['view'] = '查看';

$w['modify'] = $w['Modify'];
$w['is_cancel'] = '取消';
$w['amend_amount'] = '修改數量';
$w['end'] = '結束';
$w['require_field'] = '(必填)';
$w['search_result'] = '搜索結果';
$w['order_number'] = '訂單號';
$w['consignment'] = '發貨單';
$w['activities'] = '商品正在進行的活動';
$w['remark_package'] = '超值禮包';
$w['old_price'] = '原  價：';
$w['package_price'] = '禮包價：';
$w['then_old_price'] = '節  省：';
$w['free_goods'] = '免運費商品';

$w['searchkeywords_notice'] = '匹配多個關鍵字全部，可用 "空格" 或 "AND" 連接。如 win32 AND unix<br />匹配多個關鍵字其中部分，可用"+"或 "OR" 連接。如 win32 OR unix';
$w['hidden_outstock'] = '隱藏已脫銷的商品';
$w['keywords'] = '關鍵字';
$w['sc_ds'] = '搜索簡介';
$w['button_search'] = '立即搜索';
$w['no_search_result'] = '無法搜索到您要找的商品！';
$w['all_category'] = '所有分類';
$w['all_brand'] = '所有品牌';
$w['all_option'] = '請選擇';
$w['extension'] = '擴展選項';
$w['gram'] = '克';
$w['kilogram'] = '千克';
$w['goods_sn'] = '商品貨號：';
$w['goods_brand'] = '商品品牌：';
$w['goods_weight'] = '商品重量：';
$w['goods_number'] = '商品庫存：';
$w['goods_give_integral'] = '購買此商品贈送：';
$w['goods_integral'] = '購買此商品可使用：';
$w['goods_bonus'] = '購買此商品可獲得紅包：';
$w['goods_free_shipping'] = '此商品為<font class="shop">免運費</font>商品，計算配送金額時將不計入配送費用';
$w['goods_rank'] = '用戶評價：';
$w['goods_compare'] = '商品比較';
$w['properties'] = '商品屬性：';
$w['brief'] = '簡要介紹：';
$w['add_time'] = '上架時間：';
$w['residual_time'] = '剩餘時間：';
$w['day'] = '天';
$w['hour'] = '小時';
$w['minute'] = '分鐘';
$w['compare'] = '比較';
$w['volume_price'] = '購買商品達到以下數量區間時可享受的優惠價格';
$w['number_to'] = '數量';
$w['article_list'] = '文章列表';


/* 商品比較JS語言項 */
$w['compare_js']['button_compare'] = '比較選定商品';
$w['compare_js']['exist'] = '您已經選擇了%s';
$w['compare_js']['count_limit'] = '最多只能選擇4個商品進行對比';
$w['compare_js']['goods_type_different'] = '\"%s\"和已選擇商品類型不同無法進行對比';

$w['bonus'] = '優惠券：';
$w['no_comments'] = '暫時還沒有任何用戶評論';
$w['give_comments_rank'] = '給出';
$w['comments_rank'] = '評價';
$w['comment_num'] = "用戶評論 %d 條記錄";
$w['login_please'] = '由於您還沒有登錄，因此您還不能使用該功能。';
$w['collect_existed'] = '該商品已經存在於您的我的最愛中。';
$w['collect_success'] = '該商品已經成功地加入了您的我的最愛。';
$w['copyright'] = "&copy; %s %s 版權所有，並保留所有權利。";
$w['no_ads_id'] = '沒有指定廣告的ID以及跳轉的URL地址!';
$w['remove_collection_confirm'] = '您確定要從我的最愛中刪除選定的商品嗎？';
$w['err_change_attr'] = '沒有找到指定的商品或者沒有找到指定的商品屬性。';

$w['collect_goods'] = '收藏商品';
$w['plus'] = '加';
$w['minus'] = '減';
$w['yes'] = '是';
$w['no'] = '否';

$w['same_attrbiute_goods'] = '相同%s的商品';

/* TAG */
$w['button_submit_tag'] = '添加我的標記';
$w['tag_exists'] = '您已經為該商品添加過一個標記，請不要重複提交.';
$w['tag_cloud'] = '標籤雲';
$w['tag_anonymous'] = '對不起，只有註冊'.$w['Member'].'並且正常登錄以後才能提交標記。';
$w['tag_cloud_desc'] = '標籤雲（Tag cloud）是用以表示一個網站中的內容標籤。 標籤（tag、關鍵字）是一種更為靈活、有趣的商品分類方式，您可以為每個商品添加一個或多個標籤，那麼可以通過點擊這個標籤查看商品其他成員提交的與您的標籤一樣的商品,能夠讓您使用最快的方式查找某一個標籤的所有網店商品。比方說點擊“紅色”這個標籤，就可以打開這樣的一個頁面，顯示所有的以“紅色” 為標籤的網店商品';

/* AJAX 相關 */
$w['invalid_captcha'] = '對不起，您輸入的驗證碼不正確。';
$w['goods_exists'] = '對不起，您的購物車中已經存在相同的商品。';
$w['fitting_goods_exists'] = '對不起，您的購物車中已經添加了該配件。';
$w['invalid_number'] = '對不起，您輸入了一個非法的商品數量。';
$w['not_on_sale'] = '對不起，該商品已經下架。';
$w['no_basic_goods'] = '對不起，您希望將該商品做為配件購買，可是購物車中還沒有該商品的基本件。';
$w['cannt_alone_sale'] = '對不起，該商品不能單獨銷售。';
$w['shortage'] = "對不起，該商品已經庫存不足暫停銷售。\n你現在要進行缺貨登記來預訂該商品嗎？";
$w['shortage_little'] = "該商品已經庫存不足。已將您的購貨數量修改為 %d。\n您現在要去購物車嗎？";
$w['oos_tips'] = '該商品已經庫存不足。您現在要進行缺貨登記嗎？';

$w['addto_cart_success_1'] = "該商品已添加到購物車，您現在還需要繼續購物嗎？\n如果您希望馬上結算，請點擊“確定”按鈕。\n如果您希望繼續購物，請點擊“取消”按鈕。";
$w['addto_cart_success_2'] = "該商品已添加到購物車，您現在還需要繼續購物嗎？\n如果您希望繼續購物，請點擊“確定”按鈕。\n如果您希望馬上結算，請點擊“取消”按鈕。";
$w['no_keywords'] = "請輸入搜索關鍵字！";

/* 分頁排序 */
$w['exchange_sort']['goods_id'] = '按上架時間排序';
$w['exchange_sort']['exchange_integral'] = '按積分排序';
$w['exchange_sort']['last_update'] = '按更新時間排序';
$w['sort']['goods_id'] = '按上架時間排序';
$w['sort']['shop_price'] = '按價格排序';
$w['sort']['last_update'] = '按更新時間排序';
$w['order']['DESC'] = '倒序';
$w['order']['ASC'] = '正序';
$w['pager_1'] = '總計 ';
$w['pager_2'] = ' 個記錄';
$w['pager_3'] = '，共 ';
$w['pager_4'] = ' 頁。';
$w['page_first'] = '第一頁';
$w['page_prev'] = '上一頁';
$w['page_next'] = '下一頁';
$w['page_last'] = '最末頁';
$w['btn_display'] = '顯示方式';

/* 投票 */
$w['vote_times'] = '參與人次';
$w['vote_ip_same'] = '對不起，您已經投過票了!';
$w['submit_vote'] = '投票';
$w['submit_reset'] = '重選';
$w['vote_success'] = '恭喜你，投票成功';

/* 評論 */
$w['cmt_submit_done'] = '您的評論已成功發表, 感謝您的參與!';
$w['cmt_submit_wait'] = "您的評論已成功發表, 請等待管理員的審核!";
$w['cmt_lang']['cmt_empty_username'] = '請輸入您的用戶名稱';
$w['cmt_lang']['cmt_empty_email'] = '請輸入您的電子郵寄地址';
$w['cmt_lang']['cmt_error_email'] = '電子郵寄地址格式不正確';
$w['cmt_lang']['cmt_empty_content'] = '您沒有輸入評論的內容';
$w['cmt_spam_warning'] = '您至少在30秒後才可以繼續發表評論!';
$w['cmt_lang']['captcha_not_null'] = '驗證碼不能為空!';
$w['cmt_lang']['cmt_invalid_comments'] = '無效的評論內容!';
$w['invalid_comments'] = '無效的評論內容!';
$w['error_email'] = '電子郵寄地址格式不正確!';
$w['admin_username'] = "管理員：";
$w['reply_comment'] = '回復';
$w['comment_captcha'] = '驗證碼';
$w['comment_login'] = '只有註冊成員才能發表評論，請您登錄後再發表評論';
$w['comment_custom'] = '評論失敗。只有在本店購買過商品的註冊成員才能發表評論。';
$w['comment_brought'] = '評論失敗。只有購買過此商品的註冊用戶才能評論該商品。';
$w['anonymous'] = '匿名使用者';

/* 其他資訊 */
$w['js_languages']['goodsname_not_null'] = '商品名不能為空！';

/* 商品比較 */
$w['compare_remove'] = '移除';
$w['compare_no_goods'] = '您沒有選定任何需要比較的商品或者比較的商品數少於 2 個。';

$w['no_user_name'] = '該用戶名不存在';
$w['undifine_rank'] = '沒有定義成員等級';
$w['not_login'] = '您還沒有登陸';
$w['half_info'] = '資訊不全，請填寫所有資訊';
$w['no_id'] = '沒有商品ID';
$w['save_success'] = '修改成功';
$w['drop_consignee_confirm'] = '您確定要刪除該收貨人資訊嗎？';

/* 奪寶奇兵 */
$w['snatch_js']['price_not_null'] = '價格不能為空';
$w['snatch_js']['price_not_number'] = '價格只能是數字';
$w['snatch_list'] = '奪寶奇兵列表';
$w['not_in_range'] = '你只能在%d到%d之間出價';
$w['also_bid'] = '你已經出過價格 %s 了';
$w['lack_pay_points'] = '你積分不夠，不能出價';
$w['snatch'] = '奪寶奇兵';
$w['snatch_is_end'] = '活動已經結束';
$w['snatch_start_time'] = '本次活動從 %s 到 %s 截止';
$w['price_extent'] = '出價範圍為';
$w['user_to_use_up'] = '用戶可多次出價，每次消耗';
$w['snatch_victory_desc'] = '當本期活動截止時，系統將從所有競價獎品的用戶中，選出在所有競價中出價最低、且沒有其他出價與該價格重複的用戶（即最低且唯一競價），成為該款獎品的獲勝者.';
$w['price_less_victory'] = '如果用戶獲勝的價格低於';
$w['price_than_victory'] = '將能按當期競拍價購得該款獎品；如果用戶獲勝的價格高於';
$w['or_can'] = '則能以';
$w['shopping_product'] = '購買該款獎品';
$w['victory_price_product'] = '獲勝用戶將能按當期競拍價購得該款獎品.';
$w['now_not_snatch'] = '當前沒有活動';
$w['my_integral'] = '我的積分';
$w['bid'] = '出價';
$w['me_bid'] = '我要出價';
$w['me_now_bid'] = '我的出價';
$w['only_price'] = '唯一價格';
$w['view_snatch_result'] = '活動結果';
$w['victory_user'] = '獲獎用戶';
$w['price_bid'] = '所出價格';
$w['bid_time'] = '出價時間';
$w['not_victory_user'] = '沒有獲獎用戶';
$w['snatch_log'] = '參加奪寶奇兵%s ';
$w['not_for_you'] = '你不是獲勝者，不能購買';
$w['order_placed'] = '您已經下過訂單了，如果您想重新購買，請先取消原來的訂單';

/* 購物流程中的前臺部分 */
$w['select_spe'] = '請選擇商品屬性';

/* 購物流程中的訂單部分 */
$w['price'] = '價格';
$w['name'] = '名稱';
$w['describe'] = '描述';
$w['fee'] = '費用';
$w['free_money'] = '免費額度';
$w['img'] = '圖片';
$w['no_pack'] = '不要包裝';
$w['no_card'] = '不要賀卡';
$w['bless_note'] = '祝福語';
$w['use_integral'] = '使用積分';
$w['can_use_integral'] = '您當前的可用積分為';
$w['noworder_can_integral'] = '本訂單最多可以使用';
$w['use_surplus'] = '使用餘額';
$w['your_surplus'] = '您當前的可用餘額為';
$w['pay_fee'] = '支付手續費';
$w['insure_fee'] = '保價費用';
$w['need_insure'] = '配送是否需要保價';
$w['cod'] = '配送決定';

$w['curr_stauts'] = '當前狀態';
$w['use_bonus'] = '使用紅包';
$w['use_bonus_kill'] = '使用線下紅包';
$w['invoice'] = '開發票';
$w['invoice_type'] = '發票類型';
$w['invoice_title'] = '發票抬頭';
$w['invoice_content'] = '發票內容';
$w['order_postscript'] = '訂單附言';
$w['booking_process'] = '缺貨處理';
$w['complete_acquisition'] = '該訂單完成後，您將獲得';
$w['with_price'] = '以及價值';
$w['de'] = '的';
$w['bonus'] = '紅包';
$w['goods_all_price'] = '商品總價';
$w['discount'] = '折扣';
$w['tax'] = '發票稅額';
$w['shipping_fee'] = '配送費用';
$w['pack_fee'] = '包裝費用';
$w['card_fee'] = '賀卡費用';
$w['total_fee'] = '應付款金額';
$w['self_site'] = '本站';
$w['order_gift_integral'] = '訂單 %s 贈送的積分';

$w['order_payed_sms'] = '訂單 %s 付款了。收貨人：%s；電話：%s。';

/* 缺貨處理 */
$w['oos'][OOS_WAIT] = '等待所有商品備齊後再發';
$w['oos'][OOS_CANCEL] = '取消訂單';
$w['oos'][OOS_CONSULT] = '與店主協商';

/* 評論部分 */
$w['username'] = '用戶名';
$w['email'] = '電子郵寄地址';
$w['comment_rank'] = '評價等級';
$w['comment_content'] = '評論內容';
$w['submit_comment'] = '提交評論';
$w['button_reset'] = '重置表單';
$w['goods_comment'] = '商品評論';
$w['article_comment'] = '文章評論';

/* 支付確認部分 */
$w['pay_status'] = '支付狀態';
$w['pay_not_exist'] = '此支付方式不存在或者參數錯誤！';
$w['pay_disabled'] = '此支付方式還沒有被啟用！';
$w['pay_success'] = '您此次的支付操作已成功！';
$w['pay_fail'] = '支付操作失敗，請返回重試！';

/* 文章部分 */
$w['new_article'] = '最新文章';
$w['shop_notice'] = '商店公告';
$w['order_already_received'] = '此訂單已經確認過了，感謝您在本站購物，歡迎再次光臨。';
$w['order_invalid'] = '您提交的訂單不正確。';
$w['act_ok'] = '謝謝您通知我們您已收到貨，感謝您在本站購物，歡迎再次光臨。';
$w['receive'] = '收貨確認';
$w['buyer'] = '買家';
$w['next_article'] = '下一篇';
$w['prev_article'] = '上一篇';

/* 虛擬商品 */
$w['virtual_goods_ship_fail'] = '自動發貨失敗，請儘快聯繫商家重新發貨';

/* 選購中心 */
$w['pick_out'] = '選購中心';
$w['fit_count'] = "共有 %s 件商品符合條件";
$w['goods_type'] = "商品類型";
$w['remove_all'] = '移除所有';
$w['advanced_search'] = '高級搜索';
$w['activity'] = '本商品正在進行';
$w['order_not_exists'] = "非常抱歉，沒有找到指定的訂單。請和網站管理員聯繫。";

$w['promotion_time'] = '的時間為%s到%s，趕快來搶吧！';

/* 倒計時 */
$w['goods_js']['day'] = '天';
$w['goods_js']['hour'] = '小時';
$w['goods_js']['minute'] = '分鐘';
$w['goods_js']['second'] = '秒';
$w['goods_js']['end'] = '結束';

$w['favourable'] = '優惠活動';

/* 團購部分語言項 */
$w['group_buy'] = '團購活動';
$w['group_buy_goods'] = '團購商品';
$w['gb_goods_name'] = '團購商品：';
$w['gb_start_date'] = '開始時間：';
$w['gb_end_date'] = '結束時間：';
$w['gbs_pre_start'] = '該團購活動尚未開始，請繼續關注。';
$w['gbs_under_way'] = '該團購活動正在火熱進行中，距離結束時間還有：';
$w['gbs_ed'] = '該團購活動已結束，正在等待處理...';
$w['gbs_succeed'] = '該團購活動已成功結束！';
$w['gbs_fail'] = '該團購活動已結束，沒有成功。';
$w['gb_price_ladder'] = '價格階梯：';
$w['gb_ladder_amount'] = '數量';
$w['gb_ladder_price'] = '價格';
$w['gb_deposit'] = '保證金：';
$w['gb_restrict_amount'] = '限購數量：';
$w['gb_gift_integral'] = '贈送積分：';
$w['gb_cur_price'] = '當前價格：';
$w['gb_valid_goods'] = '當前定購數量：';
$w['gb_final_price'] = '成交價格：';
$w['gb_final_amount'] = '成交數量：';
$w['gb_notice_login'] = '提示：您需要先註冊成為本站成員並且登錄後，才能參加商品團購!';
$w['gb_error_goods_lacking'] = '對不起，商品庫存不足，請您修改數量！';
$w['gb_error_status'] = '對不起，該團購活動已經結束或尚未開始，現在不能參加！';
$w['gb_error_login'] = '對不起，您沒有登錄，不能參加團購，請您先登錄！';
$w['group_goods_empty'] = '當前沒有團購活動';

/* 拍賣部分語言項 */
$w['auction'] = '拍賣活動';
$w['act_status'] = '活動狀態';
$w['au_current_price'] = '當前價格';
$w['act_start_time'] = '開始時間';
$w['act_end_time'] = '結束時間';
$w['au_start_price'] = '起拍價';
$w['au_end_price'] = '一口價';
$w['au_amplitude'] = '加價幅度';
$w['au_deposit'] = '保證金';
$w['no_auction'] = '當前沒有拍賣活動';
$w['au_pre_start'] = '該拍賣活動尚未開始';
$w['au_under_way'] = '該拍賣活動正在進行中，距離結束時間還有：';
$w['au_under_way_1'] = '該拍賣活動正在進行中';
$w['au_bid_user_count'] = '已出價人數';
$w['au_last_bid_price'] = '最後出價';
$w['au_last_bid_user'] = '最後出價的買家';
$w['au_last_bid_time'] = '最後出價時間';
$w['au_finished'] = '該拍賣活動已結束';
$w['au_bid_user'] = '買家';
$w['au_bid_price'] = '出價';
$w['au_bid_time'] = '時間';
$w['au_bid_status'] = '狀態';
$w['no_bid_log'] = '暫時沒有買家出價';
$w['au_bid_ok'] = '領先';
$w['au_i_want_bid'] = '我要出價';
$w['button_bid'] = '出價';
$w['button_buy'] = '立即購買';
$w['au_not_under_way'] = '拍賣活動已結束，不能再出價了';
$w['au_bid_price_error'] = '請輸入正確的價格';
$w['au_bid_after_login'] = '您只有註冊成為成員並且登錄之後才能出價';
$w['au_bid_repeat_user'] = '您已經是這個商品的最高出價人了';
$w['au_your_lowest_price'] = '您的出價不能低於 %s';
$w['au_user_money_short'] = '您的可用資金不足，請先到用戶中心充值';
$w['au_unfreeze_deposit'] = '解凍拍賣活動的保證金：%s';
$w['au_freeze_deposit'] = '凍結拍賣活動的保證金：%s';
$w['au_not_finished'] = '該拍賣活動尚未結束，不能購買';
$w['au_order_placed'] = '您已經下過訂單了，如果您想重新購買，請先取消原來的訂單';
$w['au_no_bid'] = '該拍賣活動沒有人出價，不能購買';
$w['au_final_bid_not_you'] = '您不是最高出價者，不能購買';
$w['au_buy_after_login'] = '請您先登錄';
$w['au_is_winner'] = '恭喜您，您已經贏得了該商品的購買權。請點擊下麵的購買按鈕將您的寶貝買回家吧。';

/* 批發部分語言項 */
$w['ws_user_rank'] = '您的等級暫時無法查看批發方案';
$w['ws_login_please'] = '請您先登錄';
$w['ws_return_home'] = '返回首頁';
$w['wholesale'] = '批發';
$w['no_wholesale'] = '沒有批發商品';
$w['ws_price'] = '批發價';
$w['ws_subtotal'] = '小計';
$w['ws_invalid_goods_number'] = '請輸入正確的數量';
$w['ws_attr_not_matching'] = '您選擇的商品屬性不存在，請參照批發價格單選擇';
$w['ws_goods_number_not_enough'] = '您購買的數量沒有達到批發的最小數量，請參照批發價格單';
$w['ws_goods_attr_exists'] = '該商品已經在購物車中，不能再次加入';
$w['ws_remark'] = '請輸入您的聯繫方式、付款方式和配送方式等資訊';
$w['ws_order_submitted'] = '您的訂單已提交成功，請記住您的訂單號: %s。';
$w['ws_price_list'] = '價格單';

/* 積分兌換部分語言項 */
$w['exchange'] = '積分商城';
$w['exchange_integral'] = '消耗積分：';
$w['exchange_goods'] = '立刻兌換';
$w['eg_error_login'] = '對不起，您沒有登錄，不能參加兌換，請您先登錄！';
$w['eg_error_status'] = '對不起，該商品已經取消，現在不能兌換！';
$w['eg_error_integral'] = '對不起，您現有的積分值不夠兌換本商品！';
$w['notice_eg_integral'] = '積分商城商品需要消耗積分：';
$w['eg_error_number'] = '對不起，該商品庫存不足，現在不能兌換！';

/* 會員登錄註冊 */
$w['member_name'] = '成員';
$w['password'] = '密碼';
$w['confirm_password'] = '確認密碼';
$w['sign_up'] = '註冊新成員';
$w['forgot_password'] = '您忘記密碼了嗎？';
$w['hello'] = '您好';
$w['welcome_return'] = '歡迎您回來';
$w['now_account'] = '您的帳戶中現在有';
$w['balance'] = '餘額';
$w['along_with'] = '以及';
$w['preferential'] = '優惠券';
$w['edit_user_info'] = '進入用戶中心';
$w['logout'] = '退出';
$w['user_logout'] = '退出';
$w['welcome'] = '歡迎光臨本店';
$w['user_login'] = '會員登陸';
$w['login_now'] = '立即登陸';
$w['reg_now'] = '立即註冊';

/* 商品品牌頁 */
$w['official_site'] = '官方網站：';
$w['brand_category'] = '分類流覽：';
$w['all_category'] = '所有分類';

/* 商品分類頁 */
$w['goods_filter'] = '商品篩選';

/* cls_image類的語言項 */
$w['directory_readonly'] = '目錄 % 不存在或不可寫';
$w['invalid_upload_image_type'] = '不是允許的圖片格式';
$w['upload_failure'] = '檔 %s 上傳失敗。';
$w['missing_gd'] = '沒有安裝GD庫';
$w['missing_orgin_image'] = '找不到原始圖片 %s ';
$w['nonsupport_type'] = '不支援該圖像格式 %s ';
$w['creating_failure'] = '創建圖片失敗';
$w['writting_failure'] = '圖片寫入失敗';
$w['empty_watermark'] = '浮水印檔參數不能為空';
$w['missing_watermark'] = '找不到浮水印檔%s';
$w['create_watermark_res'] = '創建浮水印圖片資源失敗。浮水印圖片類型為%s';
$w['create_origin_image_res'] = '創建原始圖片資源失敗，原始圖片類型%s';
$w['invalid_image_type'] = '無法識別浮水印圖片 %s ';
$w['file_unavailable'] = '文件 %s 不存在或不可讀';

/* 郵件發送錯誤資訊 */
$w['smtp_setting_error'] = '郵件伺服器設置資訊不完整';
$w['smtp_connect_failure'] = '無法連接到郵件伺服器 %s';
$w['smtp_login_failure'] = '郵件伺服器驗證帳號或密碼不正確';
$w['smtp_refuse'] = '伺服器拒絕發送該郵件';
$w['sendemail_false'] = "郵件發送失敗，請與網站管理員聯繫！";
$w['disabled_fsockopen'] = 'fsockopen函數被禁用';

$w['topic_goods_empty'] = '當前沒有專題商品';
$w['email_list_ok'] = '訂閱';
$w['email_list_cancel'] = '退訂';
$w['email_invalid'] = '郵寄地址非法！';
$w['email_alreadyin_list'] = '郵寄地址已經存在於列表中！';
$w['email_notin_list'] = '郵寄地址不在列表中！';
$w['email_re_check'] = '已經重新發送驗證郵件，請查收並確認！';
$w['email_check'] = '請查收郵件進行確認操作！';
$w['email_not_alive'] = '此郵寄地址是未驗證狀態，不需要退訂！';
$w['check_mail'] = '驗證郵件';
$w['check_mail_content'] = "%s 您好：<br><br>這是由%s發送的郵件訂閱驗證郵件,點擊以下的連結位址,完成驗證操作。<br><a href=\"%s\" target=\"_blank\">%s</a>\n<br><br>%s<br>%s";
$w['email_checked'] = '郵件已經被確認！';
$w['hash_wrong'] = '驗證串錯誤！請核對驗證串或輸入email位址重新發送驗證串！';
$w['email_canceled'] = '郵件已經被退定！';
$w['goods_click_count'] = '商品點擊數';
$w['p_y']['link_start'] = 'TEST<a href="http://AAAwww.ecshop.com" target="_blank" style=" font-family:Verdana; font-size:11px;">';
$w['p_y']['link_p'] = 'AAAP11owe';
$w['p_y']['link_r'] = 'AAAred&nbsp;';
$w['p_y']['link_b'] = 'AAAby&nbsp;';
$w['p_y']['main_start'] = 'AAA<strong><span style="color: #3366FF">';
$w['p_y']['main_e'] = 'AAAE';
$w['p_y']['main_c'] = 'AAACSho';
$w['p_y']['main_p'] = 'AAAp</span>&nbsp;';
$w['p_y']['v_s'] = '<span style="color: #FF9966">';
$w['p_y']['v'] = VERSION;
$w['p_y']['link_end'] = '</span></strong></a>&nbsp;';

/* 虛擬卡 */
$w['card_sn'] = '卡片序號';
$w['card_password'] = '卡片密碼';
$w['end_date'] = '截至日期';
$w['virtual_card_oos'] = '虛擬卡已缺貨';

/* 訂單狀態查詢 */
$w['invalid_order_sn'] = '無效訂單號';
$w['order_status'] = '訂單狀態';
$w['shipping_date'] = '發貨時間';
$w['query_order'] = '查詢該訂單號';
$w['order_query_toofast'] = '您的提交頻率太高，歇會兒再查吧。';

$w['online_info'] = '當前共有 %s 人線上';

/* 按鈕 */
$w['btn_direct_buy'] = '直接購買';
$w['btn_buy'] = '購買';
$w['btn_collect'] = '收藏';
$w['btn_add_to_cart'] = '加入購物車';
$w['btn_add_to_collect'] = '添加收藏';

$w['stock_up'] = '缺貨';


$w['hot_search'] = '熱門搜索';

$w['please_select_attr'] = '你加入購物車的商品有不同型號可選，你是否要立即跳轉到商品詳情選擇型號？';

/* 促銷資訊欄 */
$w['snatch_promotion'] = '[奪寶]';
$w['group_promotion'] = '[團購]';
$w['auction_promotion'] = '[拍賣]';
$w['favourable_promotion'] = '[優惠]';
$w['wholesale_promotion'] = '[批發]';
$w['package_promotion'] = '[禮包]';

/* feed推送 */
$w['feed_user_buy'] = "購買了";
$w['feed_user_comment'] = "評論了";
$w['feed_goods_price'] = "商品價格";
$w['feed_goods_desc'] = "商品描述";

/* 留言板 */
$w['shopman_comment'] = '商品評論';
$w['message_ping'] = '評';
$w['message_board'] = "留言板";
$w['post_message'] = "我要留言";
$w['message_title'] = '主題';
$w['message_time'] = '留言時間';
$w['reply_time'] = '回復時間';
$w['shop_owner_reply'] = '店主回復';
$w['message_board_type'] = '留言類型';
$w['message_content'] = '留言內容';
$w['message_anonymous'] = '匿名留言';
$w['message_type'][M_MESSAGE] = '留言';
$w['message_type'][M_COMPLAINT] = '投訴';
$w['message_type'][M_ENQUIRY] = '詢問';
$w['message_type'][M_CUSTOME] = '售後';
$w['message_type'][M_BUY] = '求購';
$w['message_type'][M_BUSINESS] = '商家留言';
$w['message_type'][M_COMMENT] = '評論';
$w['message_board_js']['msg_empty_email'] = '請輸入您的電子郵寄地址';
$w['message_board_js']['msg_error_email'] = '電子郵寄地址格式不正確';
$w['message_board_js']['msg_title_empty'] = '留言標題為空';
$w['message_board_js']['msg_content_empty'] = '留言內容為空';
$w['message_board_js']['msg_captcha_empty'] = '驗證碼為空';
$w['message_board_js']['msg_title_limit'] = '留言標題不能超過200個字';
$w['message_submit_wait'] = '您的留言已成功發表, 請等待管理員的審核!';
$w['message_submit_done'] = '發表留言成功';
$w['message_board_close'] = "暫停留言板功能";
$w['upload_file_limit'] = '檔大小超過了限制 %dKB';
$w['message_list_lnk'] = '返回留言列表';

/* 報價單 */
$w['quotation'] = "報價單";
$w['print_quotation'] = "列印報價單";
$w['goods_inventory'] = "庫存";
$w['goods_category'] = "商品分類";
$w['shopman_reply'] = '管理員回復';

/* 相冊JS語言項 */
$w['gallery_js']['close_window'] = '您是否關閉當前窗口';
$w['submit'] = '提 交';
$w['reset'] = '重 置';
$w['order_query'] = '訂單查詢';
$w['shipping_query'] = '發貨查詢';
$w['view_history'] = '流覽歷史';
$w['clear_history'] = '[清空]';
$w['no_history'] = '您已清空最近流覽過的商品';
$w['goods_tag'] = '商品標籤';
$w['releate_goods'] = '相關商品';
$w['goods_list'] = '商品列表';
$w['favourable_goods'] = '收藏該商品';
$w['accessories_releate'] = '相關配件';
$w['article_releate'] = '相關文章';
$w['email_subscribe'] = '郵件訂閱';
$w['consignee_info'] = '收貨人信息';
$w['user_comment'] = '用戶評論';
$w['total'] = '共';
$w['user_comment_num'] = '條評論';
$w['auction_goods'] = '拍賣商品';
$w['auction_goods_info'] = '拍賣商品詳情';
$w['article_cat'] = '文章分類';
$w['online_vote'] = '線上調查';
$w['new_price'] = '最新出價';
$w['promotion_info'] = '促銷資訊';
$w['price_grade'] = '價格範圍';
$w['your_choice'] = '您的選擇';
$w['system_info'] = '系統資訊';
$w['all_tags'] = '所有標籤';
$w['activity_list'] = '活動列表';
$w['package_list'] = '禮包列表';
$w['treasure_info'] = '寶貝詳情';
$w['activity_desc'] = '活動描述';
$w['activity_intro'] = '活動介紹';
$w['get_password'] = '找回密碼';
$w['fee_total'] = '費用總計';
$w['other_info'] = '其它資訊';
$w['user_balance'] = '會員餘額';
$w['wholesale_goods_cart'] = '批發商品購物車';
$w['wholesale_goods_list'] = '批發商品列表';
$w['bid_record'] = '出價記錄';
$w['shipping_method'] = '配送方式';
$w['payment_method'] = '支付方式';
$w['goods_package'] = '商品包裝';
$w['goods_card'] = '祝福賀卡';
$w['groupbuy_intro'] = '團購說明';
$w['groupbuy_goods_info'] = '團購商品詳情';
$w['act_time'] = '起止時間';
$w['top10'] = '銷售排行';

/* 優惠活動 */
$w['label_act_name'] = '優惠活動名稱：';
$w['label_start_time'] = '優惠開始時間：';
$w['label_end_time'] = '優惠結束時間：';
$w['label_user_rank'] = '享受優惠的會員等級：';
$w['not_user'] = '非會員';
$w['label_act_range'] = '優惠範圍：';
$w['far_all'] = '全部商品';
$w['far_category'] = '以下分類';
$w['far_brand'] = '以下品牌';
$w['far_goods'] = '以下商品';
$w['label_min_amount'] = '金額下限：';
$w['label_max_amount'] = '金額上限：';
$w['notice_max_amount'] = '0表示沒有上限';
$w['label_act_type'] = '優惠方式：';
$w['fat_goods'] = '享受贈品（特惠品）';
$w['fat_price'] = '享受現金減免';
$w['fat_discount'] = '享受價格折扣';
$w['orgtotal'] = '原始價格';
$w['heart_buy'] = '心動不如行動';

/* 其他範本涉及常用語言項 */
$w['label_regist'] = '用戶註冊';
$w['label_login'] = '用戶登錄';
$w['label_profile'] = '使用者資訊';
$w['label_collection'] = '我的收藏';
$w['article_list'] = '文章列表';
$w['preferences_price'] = '優惠價格';
$w['divided_into'] = '分成規則';



/* 補充 */
$w['username_and_email']='請輸入您註冊的用戶名和註冊時填寫的電子郵寄地址。';
$w['back_page_up']='返回上一頁';

$w['label_password_intensity']='密碼強度';
$w['pwd_lower']='弱';
$w['pwd_middle']='中';
$w['pwd_high']='強';
$w['label_confirm_password']='確認密碼';
$w['other_office_phone']='辦公電話';
$w['other_home_phone']='家庭電話';
$w['other_mobile_phone']='手機';
$w['agreement']='我已看過並接受《使用者協議》';
$w['want_login']='我已有帳號，我要登錄';

$w['username_empty'] = '用戶名為空';
$w['username_invalid'] = '用戶名 %s 含有敏感字元';
$w['username_exist'] = '用戶名 %s 已經存在';
$w['username_not_allow'] = '用戶名 %s 不允許註冊';

$w['email_empty'] = 'email為空';

$w['email_exist'] = '%s 已經存在';
$w['email_not_allow'] = 'Email %s 不允許註冊';

$w['password_shorter'] = '登錄密碼不能少於 6 個字元。';
$w['passwd_balnk'] = '密碼中不能包含空格';
$w['password_empty'] = '登錄密碼不能為空。';

$w['confirm_password_invalid'] = '兩次輸入密碼不一致';
$w['UnagreeAgreement'] = '您沒有接受協議';

$w['msn_invalid'] = 'msn位址不是一個有效的郵寄地址';
$w['qq_invalid'] = 'QQ號碼不是一個有效的號碼';
$w['home_phone_invalid'] = '家庭電話不是一個有效號碼';
$w['office_phone_invalid'] = '辦公電話不是一個有效號碼';
$w['mobile_phone_invalid'] = '手機號碼不是一個有效號碼';


$w['Icp_Number'] = 'ICP備案證書號';
$w['ICP'] = 'ICP';

#從以上開始修改


$save_path=getcwd().'/';
$target_file= "/lang/".$l.".php";
while(!file_exists($save_path.$target_file))
{
	$save_path.='../';
}
$parl="module_main_".$l;
$parl_len=strlen($parl);
$save_path.='lang/';
$dir=opendir($save_path);
while(($file=readdir($dir))!==false){
	if(!($file=='.'||$file=='..'))
	{
		if(substr($file,0,($parl_len))==$parl)
		{
			include($save_path.'/'.$file);
		}
	}
}
$lang[$l]=$w;
unset($w);
?>