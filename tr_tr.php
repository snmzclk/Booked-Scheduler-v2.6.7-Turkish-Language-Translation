<?php
/**
 * Copyright 2011-2017 Nick Korbel
 *
 * This file is part of Booked Scheduler.
 *
 * Booked Scheduler is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Booked Scheduler is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Booked Scheduler.  If not, see <http://www.gnu.org/licenses/>.
 */

require_once('en_us.php');

class tr_tr extends en_us
{
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * @return array
	 */
	protected function _LoadDates()
	{
		$dates = array();

		$dates['general_date'] = 'd/m/Y';
		$dates['general_datetime'] = 'd/m/Y H:i';
		$dates['short_datetime'] = 'j/n/y H:i';
		$dates['schedule_daily'] = 'l, d/m/Y';
		$dates['reservation_email'] = 'd/m/Y @ H:i (e)';
		$dates['res_popup'] = 'd/m/Y H:i';
		$dates['res_popup_time'] = 'H:i';
		$dates['short_reservation_date'] = 'j/n/y H:i';
		$dates['dashboard'] = 'd/m/Y H:i';
		$dates['period_time'] = 'H:i';
		$dates['mobile_reservation_date'] = 'j/n H:i';
		$dates['general_date_js'] = 'dd/mm/yy';
		$dates['general_time_js'] = 'h:mm tt';
		$dates['momentjs_datetime'] = 'D/M/YY h:mm';
		$dates['calendar_time'] = 'h:mmt';
		$dates['calendar_dates'] = 'd M';

		$this->Dates = $dates;

		return $this->Dates;
	}

	/**
	 * @return array
	 */
	protected function _LoadStrings()
	{
		$strings = array();

		$strings['FirstName'] = 'İsim';
		$strings['LastName'] = 'Soyisim';
		$strings['Timezone'] = 'Zaman Dilimi';
		$strings['Edit'] = 'Düzenle';
		$strings['Change'] = 'Değiştir';
		$strings['Rename'] = 'Yeniden Adlandır';
		$strings['Remove'] = 'Kaldır';
		$strings['Delete'] = 'Sil';
		$strings['Update'] = 'Düzenle';
		$strings['Cancel'] = 'İptal';
		$strings['Add'] = 'Ekle';
		$strings['Name'] = 'İsim';
		$strings['Yes'] = 'Evet';
		$strings['No'] = 'Hayır';
		$strings['FirstNameRequired'] = 'İsim zorunludur.';
		$strings['LastNameRequired'] = 'Soyisim zorunludur.';
		$strings['PwMustMatch'] = 'Şifreler eşleşmelidir.';
		$strings['ValidEmailRequired'] = 'Geçerli bir eposta adresi gereklidir.';
		$strings['UniqueEmailRequired'] = 'Bu eposta adresi daha önce kayıt edilmiş.';
		$strings['UniqueUsernameRequired'] = 'Bu kullanıcı adı daha önce kayıt edilmiş.';
		$strings['UserNameRequired'] = 'Kullanıcı adı zorunludur.';
		$strings['CaptchaMustMatch'] = 'Lütfen resimde görünen karakterleri giriniz.';
		$strings['Today'] = 'Bugün';
		$strings['Week'] = 'Hafta';
		$strings['Month'] = 'Ay';
		$strings['BackToCalendar'] = 'Takvime Dön';
		$strings['BeginDate'] = 'Başlangıç';
		$strings['EndDate'] = 'Bitiş';
		$strings['Username'] = 'Kullanıcı Adı';
		$strings['Password'] = 'Şifre';
		$strings['PasswordConfirmation'] = 'Şifre Onayla';
		$strings['DefaultPage'] = 'Anasayfa';
		$strings['MyCalendar'] = 'Takvimim';
		$strings['ScheduleCalendar'] = 'Takvim Planla';
		$strings['Registration'] = 'Üyelik';
		$strings['NoAnnouncements'] = 'Bildirim yok';
		$strings['Announcements'] = 'Bildirimler';
		$strings['NoUpcomingReservations'] = 'Rezervasyon yok';
		$strings['UpcomingReservations'] = 'Yaklaşan Rezervasyonlar';
		$strings['AllNoUpcomingReservations'] = 'Önümüzdeki %s gün içinde herhangi bir rezervasyon yok.';
		$strings['AllUpcomingReservations'] = 'Tüm Rezervasyonlar';
		$strings['ShowHide'] = 'Gizle/Göster';
		$strings['Error'] = 'Hata';
		$strings['ReturnToPreviousPage'] = 'Son sayfaya tekrar gidiniz';
		$strings['UnknownError'] = 'Bilinmeyen hata!';
		$strings['InsufficientPermissionsError'] = 'Burayı görmek için yetkiniz bulunmamaktadır.';
		$strings['MissingReservationResourceError'] = 'Salon/Oda belirtilmedi';
		$strings['MissingReservationScheduleError'] = 'Zaman belirtilmedi';
		$strings['DoesNotRepeat'] = 'Tekrar Yok';
		$strings['Daily'] = 'Günlük';
		$strings['Weekly'] = 'Haftalık';
		$strings['Monthly'] = 'Aylık';
		$strings['Yearly'] = 'Yıllık';
		$strings['RepeatPrompt'] = 'Tekrar';
		$strings['hours'] = 'saat';
		$strings['days'] = 'gün';
		$strings['weeks'] = 'hafta';
		$strings['months'] = 'ay';
		$strings['years'] = 'yıl';
		$strings['day'] = 'gün';
		$strings['week'] = 'hafta';
		$strings['month'] = 'ay';
		$strings['year'] = 'yıl';
		$strings['repeatDayOfMonth'] = 'ayın günü';
		$strings['repeatDayOfWeek'] = 'haftanın günü';
		$strings['RepeatUntilPrompt'] = 'Kadar';
		$strings['RepeatEveryPrompt'] = 'Her';
		$strings['RepeatDaysPrompt'] = 'On';
		$strings['CreateReservationHeading'] = 'Yeni Rezervasyon';
		$strings['EditReservationHeading'] = 'Rezervasyon Güncelleme %s';
		$strings['ViewReservationHeading'] = 'Rezervasyon Görüntüleme %s';
		$strings['ReservationErrors'] = 'Değiştir';
		$strings['Create'] = 'Oluştur';
		$strings['ThisInstance'] = 'Yalnızca Bu İstek';
		$strings['AllInstances'] = 'Tüm İstekler';
		$strings['FutureInstances'] = 'Gelecek İstekler';
		$strings['Print'] = 'Yazdır';
		$strings['ShowHideNavigation'] = 'Menüyü Gizle/Göster';
		$strings['ReferenceNumber'] = 'Referans Numarası';
		$strings['Tomorrow'] = 'Yarın';
		$strings['LaterThisWeek'] = 'Bu Haftadan Sonraki Günler';
		$strings['NextWeek'] = 'Sonraki Hafta';
		$strings['SignOut'] = 'Çıkış';
		$strings['LayoutDescription'] = '%s gün içinde bir kez, %s gününü göstererek başlıyor';
		$strings['AllResources'] = 'Salonlar/Odalar';
		$strings['TakeOffline'] = 'Çevrimdışı';
		$strings['BringOnline'] = 'Çevrimiçi';
		$strings['AddImage'] = 'Resim Ekle';
		$strings['NoImage'] = 'Resim Bulunmamaktadır';
		$strings['Move'] = 'Taşı';
		$strings['AppearsOn'] = '%s üzerinde görünüyor';
		$strings['Location'] = 'Yer';
		$strings['NoLocationLabel'] = '(yok)';
		$strings['Contact'] = 'İletişim';
		$strings['NoContactLabel'] = '(yok)';
		$strings['Description'] = 'Açıklama';
		$strings['NoDescriptionLabel'] = '(açıklama yok)';
		$strings['Notes'] = 'Notlar';
		$strings['NoNotesLabel'] = '(yok)';
		$strings['NoTitleLabel'] = '(başlıksız)';
		$strings['UsageConfiguration'] = 'Kullanım Ayarları';
		$strings['ChangeConfiguration'] = 'Değişiklik Ayarları';
		$strings['ResourceMinLength'] = 'Rezervasyonlar en az %s sürmeli';
		$strings['ResourceMinLengthNone'] = 'Minimum rezervasyon süresi yok';
		$strings['ResourceMaxLength'] = 'Rezervasyonlar en fazla %s olabilir';
		$strings['ResourceMaxLengthNone'] = 'Maksimum rezervasyon süresi yok';
		$strings['ResourceRequiresApproval'] = 'Rezervasyonlar için onay gerekir';
		$strings['ResourceRequiresApprovalNone'] = 'Rezervasyonlar için onay gerekmez';
		$strings['ResourcePermissionAutoGranted'] = 'Rezervasyonlar için otomatik olarak izin ver';
		$strings['ResourcePermissionNotAutoGranted'] = 'İzin otomatik olarak verilmez';
		$strings['ResourceMinNotice'] = 'Rezervasyonlar başlama saatinden en az %s önce yapılmalıdır';
		$strings['ResourceMinNoticeNone'] = 'Rezervasyonlar şimdiki zamana kadar yapılabilir';
		$strings['ResourceMaxNotice'] = 'Rezervasyonlar, şimdiki zamandan %s daha önce bitmemelidir';
		$strings['ResourceMaxNoticeNone'] = 'Rezervasyonlar ileri bir tarihta sona erebilir';
		$strings['ResourceBufferTime'] = 'Rezervasyonlar %s arasında olmalıdır';
		$strings['ResourceBufferTimeNone'] = 'Rezervasyonlar arasında ara bulunmamaktadır';
		$strings['ResourceAllowMultiDay'] = 'Periyodik rezervasyon yapılabilir';
		$strings['ResourceNotAllowMultiDay'] = 'Periyodik rezervasyon yapılamaz';
		$strings['ResourceCapacity'] = 'Bu Salon/Oda %s kişilik kapasiteye sahip';
		$strings['ResourceCapacityNone'] = 'Bu Salon/Oda sınırsız kapasiteye sahip';
		$strings['AddNewResource'] = 'Yeni Salon/Oda Ekle';
		$strings['AddNewUser'] = 'Yeni Üye Ekle';
		$strings['AddResource'] = 'Salon/Oda Ekle';
		$strings['Capacity'] = 'Kapasite';
		$strings['Access'] = 'Erişim';
		$strings['Duration'] = 'Süre';
		$strings['Active'] = 'Aktif';
		$strings['Inactive'] = 'Pasif';
		$strings['ResetPassword'] = 'Şifre Güncelle';
		$strings['LastLogin'] = 'Son Giriş';
		$strings['Search'] = 'Ara';
		$strings['ResourcePermissions'] = 'Salon/Oda İzinleri';
		$strings['Reservations'] = 'Rezervasyonlar';
		$strings['Groups'] = 'Gruplar';
		$strings['Users'] = 'Üyeler';
		$strings['AllUsers'] = 'Tüm Üyeler';
		$strings['AllGroups'] = 'Tüm Gruplar';
		$strings['AllSchedules'] = 'Tüm Planlar';
		$strings['UsernameOrEmail'] = 'Kullanıcı adı veya Eposta';
		$strings['Members'] = 'Üyeler';
		$strings['QuickSlotCreation'] = 'Her %s dakika içinde %s ve %s arasındaki aralıkları oluştur';
		$strings['ApplyUpdatesTo'] = 'Güncellemeleri Uygula';
		$strings['CancelParticipation'] = 'Katılımı İptal Et';
		$strings['Attending'] = 'Katılacak';
		$strings['QuotaConfiguration'] = 'On %s for %s users in %s are limited to %s %s per %s';
		$strings['QuotaEnforcement'] = '%s ve %s uygulanır';
		$strings['reservations'] = 'rezervasyonlar';
		$strings['reservation'] = 'rezervasyon';
		$strings['ChangeCalendar'] = 'Takvim Değiştir';
		$strings['AddQuota'] = 'Kontenjan Ekle';
		$strings['FindUser'] = 'Kullanıcı Bul';
		$strings['Created'] = 'Oluşturma';
		$strings['LastModified'] = 'Son Güncelleme';
		$strings['GroupName'] = 'Grup Adı';
		$strings['GroupMembers'] = 'Grup Üyeleri';
		$strings['GroupRoles'] = 'Grup Rolleri';
		$strings['GroupAdmin'] = 'Grup Yöneticisi';
		$strings['Actions'] = 'Eylem';
		$strings['CurrentPassword'] = 'Mevcut Şifre';
		$strings['NewPassword'] = 'Yeni Şifre';
		$strings['InvalidPassword'] = 'Mevcut şifre hatalı';
		$strings['PasswordChangedSuccessfully'] = 'Şifreniz başarıyla güncellendi';
		$strings['SignedInAs'] = 'Şu kullanıcı ile giriş yapıldı:';
		$strings['NotSignedIn'] = 'Giriş yapılmadı';
		$strings['ReservationTitle'] = 'Başlık';
		$strings['ReservationDescription'] = 'Açıklama';
		$strings['ResourceList'] = 'Ayrılabilir Salonlar/Odalar';
		$strings['Accessories'] = 'Ekipman';
		$strings['InvitationList'] = 'Davetliler';
		$strings['AccessoryName'] = 'Ekipman ismi';
		$strings['QuantityAvailable'] = 'Uygun miktar';
		$strings['Resources'] = 'Salonlar/Odalar';
		$strings['Participants'] = 'Katılımcılar';
		$strings['User'] = 'Kullanıcı';
		$strings['Resource'] = 'Salon/Oda';
		$strings['Status'] = 'Durum';
		$strings['Approve'] = 'Onayla';
		$strings['Page'] = 'Sayfa';
		$strings['Rows'] = 'Satır';
		$strings['Unlimited'] = 'Limitsiz';
		$strings['Email'] = 'E-posta';
		$strings['EmailAddress'] = 'E-posta Adresi';
		$strings['Phone'] = 'Telefon';
		$strings['Organization'] = 'Kurum';
		$strings['Position'] = 'Pozisyon';
		$strings['Language'] = 'Dil';
		$strings['Permissions'] = 'İzinler';
		$strings['Reset'] = 'Sıfırla';
		$strings['FindGroup'] = 'Grup Bul';
		$strings['Manage'] = 'Yönet';
		$strings['None'] = 'Boş';
		$strings['AddToOutlook'] = 'Takvime Ekle';
		$strings['Done'] = 'Tamam';
		$strings['RememberMe'] = 'Beni Hatırla';
		$strings['FirstTimeUser?'] = 'Yeni üye misin?';
		$strings['CreateAnAccount'] = 'Hesap Oluştur';
		$strings['ViewSchedule'] = 'Takvimi Gör';
		$strings['ForgotMyPassword'] = 'Şifremi Unuttum';
		$strings['YouWillBeEmailedANewPassword'] = 'Yeni şifreniz e-posta adresinize gönderilecektir.';
		$strings['Close'] = 'Kapat';
		$strings['ExportToCSV'] = 'CSV aktar';
		$strings['OK'] = 'Tamam';
		$strings['Working'] = 'Lütfen bekleyin...';
		$strings['Login'] = 'Giriş';
		$strings['AdditionalInformation'] = 'Ek Bilgiler';
		$strings['AllFieldsAreRequired'] = 'zorunlu alan';
		$strings['Optional'] = 'optional';
		$strings['YourProfileWasUpdated'] = 'Profiliniz güncellendi';
		$strings['YourSettingsWereUpdated'] = 'Ayarlarınız güncellendi';
		$strings['Register'] = 'Kayıt Ol';
		$strings['SecurityCode'] = 'Güvenlik Kodu';
		$strings['ReservationCreatedPreference'] = 'Kendi adıma rezervasyon oluşturduğum zaman veya benim adıma rezervasyon oluşturulduğunda';
		$strings['ReservationUpdatedPreference'] = 'Rezervasyonu güncellediğim zaman veya benim adıma bir rezervasyon güncellendiğinde';
		$strings['ReservationDeletedPreference'] = 'Rezervasyonu sildiğim zaman veya benim adıma bir rezervasyon silindiğinde';
		$strings['ReservationApprovalPreference'] = 'Bekleyen rezervasyonum onaylandığı zaman';
		$strings['PreferenceSendEmail'] = 'E-posta Gönder';
		$strings['PreferenceNoEmail'] = 'E-posta Gönderme';
		$strings['ReservationCreated'] = 'Rezervasyon başarıyla oluşturuldu!';
		$strings['ReservationUpdated'] = 'Rezervasyon başarıyla güncellendi!';
		$strings['ReservationRemoved'] = 'Rezervasyon kaldırıldı';
		$strings['ReservationRequiresApproval'] = 'Bir veya birden fazla rezerv edilmiş oda kullanımından önce onay gerektirmektedir. Bu rezervasyonlar onaylanan kadar bekletilecektir.';
		$strings['YourReferenceNumber'] = 'Rezervasyon numaranız: %s';
		$strings['ChangeUser'] = 'Kullanıcı Değiştir';
		$strings['MoreResources'] = 'Daha Fazla Oda';
		$strings['ReservationLength'] = 'Süre';
		$strings['ParticipantList'] = 'Katılımcılar';
		$strings['AddParticipants'] = 'Katılımcı Ekle';
		$strings['InviteOthers'] = 'Davet Et';
		$strings['AddResources'] = 'Salon/Oda Ekle';
		$strings['AddAccessories'] = 'Ekipman Ekle';
		$strings['Accessory'] = 'Ekipman';
		$strings['QuantityRequested'] = 'İstenen Sayı';
		$strings['CreatingReservation'] = 'Rezervasyon oluşturuluyor';
		$strings['UpdatingReservation'] = 'Reservation güncelleniyor';
		$strings['DeleteWarning'] = 'Bu işlem kalıcıdır ve geri alınamaz!';
		$strings['DeleteAccessoryWarning'] = 'Bu eklenti silindiğinde tüm rezervayonlar silinir.';
		$strings['AddAccessory'] = 'Ekipman Ekle';
		$strings['AddBlackout'] = 'Kısıtlama Ekle';
		$strings['AllResourcesOn'] = 'Salonlar/Odalar';
		$strings['Reason'] = 'Sebep';
		$strings['BlackoutShowMe'] = 'Çakışan rezervasyonları görüntüle';
		$strings['BlackoutDeleteConflicts'] = 'Çakışan rezervasyonları iptal et';
		$strings['Filter'] = 'Filtrele';
		$strings['Between'] = 'arası';
		$strings['CreatedBy'] = 'Oluşturuldu';
		$strings['BlackoutCreated'] = 'Kısıtlama Oluşturuldu';
		$strings['BlackoutNotCreated'] = 'Kısıtlama Oluşturulamadı';
		$strings['BlackoutUpdated'] = 'Kısıtlama Güncellendi';
		$strings['BlackoutNotUpdated'] = 'Kısıtlama güncellenemedi';
		$strings['BlackoutConflicts'] = 'Çakışan bekleme süreleri var';
		$strings['ReservationConflicts'] = 'Çakışan rezervasyon zamanları var';
		$strings['UsersInGroup'] = 'Bu gruptaki kullanıcılar';
		$strings['Browse'] = 'Göster';
		$strings['DeleteGroupWarning'] = 'Bu grup silinirse, ilişkili tüm oda izinleri kaldırılacak.  Bu gruptaki kullanıcılar odalara erişimi kaybedebilir.';
		$strings['WhatRolesApplyToThisGroup'] = 'Bu grup için hangi roller uygulanır?';
		$strings['WhoCanManageThisGroup'] = 'Bu grubu kimler yönetebilir?';
		$strings['WhoCanManageThisSchedule'] = 'Bu programı kim yönetebilir?';
		$strings['AllQuotas'] = 'Tüm Kotlar';
		$strings['QuotaReminder'] = 'Unutmayın: Kota, saat dilimi zamanlamasına dayanarak uygulanır.';
		$strings['AllReservations'] = 'Bütün Rezervasyonlar';
		$strings['PendingReservations'] = 'Bekleyen Rezervasyonlar';
		$strings['Approving'] = 'Onaylama';
		$strings['MoveToSchedule'] = 'Programa taşı';
		$strings['DeleteResourceWarning'] = 'Bu kaynağı silmek ilişkili tüm verileri silecektir, içeren';
		$strings['DeleteResourceWarningReservations'] = 'her geçmiş, şuan da ki ve gelecekteki rezervasyonlarla ilgilidir';
		$strings['DeleteResourceWarningPermissions'] = 'tüm izin atamaları';
		$strings['DeleteResourceWarningReassign'] = 'Lütfen, devam etmeden önce silinmesini istediğiniz herhangi bir şeyi yeniden belirleyin';
		$strings['ScheduleLayout'] = 'Düzenleme (her zaman %s)';
		$strings['ReservableTimeSlots'] = 'Rezerve Edilebilecek Zaman Aralıkları';
		$strings['BlockedTimeSlots'] = 'Kapalı Zaman Aralıkları';
		$strings['ThisIsTheDefaultSchedule'] = 'Ana Takvim';
		$strings['DefaultScheduleCannotBeDeleted'] = 'Ana Takvim Silinemez';
		$strings['MakeDefault'] = 'Varsayılan Yap';
		$strings['BringDown'] = 'İndir';
		$strings['ChangeLayout'] = 'Düzenlemeyi Değiştir';
		$strings['AddSchedule'] = 'Program Ekle';
		$strings['StartsOn'] = 'Başla';
		$strings['NumberOfDaysVisible'] = 'Görülebilen Gün Sayısı';
		$strings['UseSameLayoutAs'] = 'Aynı Düzenlemeyi Farklı Olarak Kullan';
		$strings['Format'] = 'Biçim';
		$strings['OptionalLabel'] = 'İsteğe Bağlı Etiket';
		$strings['LayoutInstructions'] = 'Her satıra bir ara koyun.  Slots must be provided for all 24 hours of the day beginning and ending at 12:00 AM.';
		$strings['AddUser'] = 'Kullanıcı Ekle';
		$strings['UserPermissionInfo'] = 'Kaynağa gerçek erişim, grup izinleri veya harici izin ayarları kullanıcının rolüne bağlı olarak farklı olabilir';
		$strings['DeleteUserWarning'] = 'Bu kullanıcı silindiğinde şuan da ki, gelecekteki ve geçmişteki bütün rezervasyonları kaldırılacaktır.';
		$strings['AddAnnouncement'] = 'Bildirim Ekle';
		$strings['Announcement'] = 'Bildirimler';
		$strings['Priority'] = 'Öncelikli';
		$strings['Reservable'] = 'Açık';
		$strings['Unreservable'] = 'Bloklu';
		$strings['Reserved'] = 'Rezerve';
		$strings['MyReservation'] = 'Bana Ait';
		$strings['Pending'] = 'Beklemede';
		$strings['Past'] = 'Geçmiş';
		$strings['Restricted'] = 'Kapalı';
		$strings['ViewAll'] = 'Hepsini Göster';
		$strings['MoveResourcesAndReservations'] = 'Salonları/Odaları ve rezervasyonları taşı';
		$strings['TurnOffSubscription'] = 'Takvim Aboneliklerini Kapat';
		$strings['TurnOnSubscription'] = 'Bu Takvime Abone Olmalarına İzin Ver';
		$strings['SubscribeToCalendar'] = 'Bu Takvime Abone Olun';
		$strings['SubscriptionsAreDisabled'] = 'Yönetici takvim aboneliklerini devredışı bıraktı';
		$strings['NoResourceAdministratorLabel'] = '(Salon/Oda Yöneticisi Yok)';
		$strings['WhoCanManageThisResource'] = 'Bu Kaynağı Kim Yönetebilir?';
		$strings['ResourceAdministrator'] = 'Salon/Oda Yöneticisi';
		$strings['Private'] = 'Özel';
		$strings['Accept'] = 'Kabul';
		$strings['Decline'] = 'Red';
		$strings['ShowFullWeek'] = 'Tüm Haftayı Göster';
		$strings['CustomAttributes'] = 'Özel Alanlar';
		$strings['AddAttribute'] = 'Yeni alan ekle';
		$strings['EditAttribute'] = 'Alan güncelle';
		$strings['DisplayLabel'] = 'Etiket göster';
		$strings['Type'] = 'Tip';
		$strings['Required'] = 'Zorunlu';
		$strings['ValidationExpression'] = 'Onaylama Notu';
		$strings['PossibleValues'] = 'Olabilecek değerler';
		$strings['SingleLineTextbox'] = 'Tek Satırlı Metin Kutusu';
		$strings['MultiLineTextbox'] = 'Çoklu Satır Metin Kutusu';
		$strings['Checkbox'] = 'Onay Kutusu';
		$strings['SelectList'] = 'Listeyi Seç';
		$strings['CommaSeparated'] = 'virgülle ayrılmış';
		$strings['Category'] = 'Kategori';
		$strings['CategoryReservation'] = 'Rezervasyon';
		$strings['CategoryGroup'] = 'Grup';
		$strings['SortOrder'] = 'Sıralama Düzeni';
		$strings['Title'] = 'Başlık';
		$strings['AdditionalAttributes'] = 'Diğer alanlar';
		$strings['True'] = 'Doğru';
		$strings['False'] = 'Yanlış';
		$strings['ForgotPasswordEmailSent'] = 'Parola sıfırlama talimatıyla iligili verilen adrese bir e-posta gönderildi';
		$strings['ActivationEmailSent'] = 'Birazdan aktifleştirme e-postası alacaksınız.';
		$strings['AccountActivationError'] = 'Maalesef hesabınızı aktifleştiremedik.';
		$strings['Attachments'] = 'Ekler';
		$strings['AttachFile'] = 'Dosya Eki';
		$strings['Maximum'] = 'max';
		$strings['NoScheduleAdministratorLabel'] = 'Program Yöneticisi Yok';
		$strings['ScheduleAdministrator'] = 'Program Yöneticisi';
		$strings['Total'] = 'Toplam';
		$strings['QuantityReserved'] = 'Rezerv Miktarı';
		$strings['AllAccessories'] = 'Tüm Aksesuarlar';
		$strings['GetReport'] = 'Rapor Edin';
		$strings['NoResultsFound'] = 'Eşleşen sonuç bulunamadı';
		$strings['SaveThisReport'] = 'Bu Raporu Kaydet';
		$strings['ReportSaved'] = 'Rapor Kaydedildi!';
		$strings['EmailReport'] = 'E-posta Raporu';
		$strings['ReportSent'] = 'Rapor Gönderildi!';
		$strings['RunReport'] = 'Raporu Çalıştır';
		$strings['NoSavedReports'] = 'Kaydedilmiş raporunuz yok.';
		$strings['CurrentWeek'] = 'Bu Hafta';
		$strings['CurrentMonth'] = 'Bu Ay';
		$strings['AllTime'] = 'Her Zaman';
		$strings['FilterBy'] = 'Filtrele';
		$strings['Select'] = 'Seç';
		$strings['List'] = 'Liste';
		$strings['TotalTime'] = 'Toplam Zaman';
		$strings['Count'] = 'Sayı';
		$strings['Usage'] = 'Kullanım';
		$strings['AggregateBy'] = 'Toplam';
		$strings['Range'] = 'Alan';
		$strings['Choose'] = 'Seç';
		$strings['All'] = 'Tümü';
		$strings['ViewAsChart'] = 'Grafiği Görüntüle';
		$strings['ReservedResources'] = 'Rezerv Edilmiş Salonlar/Odalar';
		$strings['ReservedAccessories'] = 'Rezerv Edilmiş Aksesuarlar';
		$strings['ResourceUsageTimeBooked'] = 'Salon/Oda Kullanımı - Rezervasyon Süresi';
		$strings['ResourceUsageReservationCount'] = 'Salon/Oda Kullanımı - Rezervasyon Sayısı';
		$strings['Top20UsersTimeBooked'] = 'En Çok 20 Kullanıcı - Rezervasyon Süresi';
		$strings['Top20UsersReservationCount'] = 'En Çok 20 Kullanıcı - Rezervasyon Sayısı';
		$strings['ConfigurationUpdated'] = 'Yapılandırma dosyası güncellendi';
		$strings['ConfigurationUiNotEnabled'] = '$conf[\'settings\'][\'pages\'][\'enable.configuration\'] hatalı veya eksik olarak ayarlandığından bu sayfaya erişilemiyor.';
		$strings['ConfigurationFileNotWritable'] = 'Yapılandırma dosyası yazılabilir değil. Lütfen bu dosyanın izinlerini kontrol edin ve tekrar deneyin.';
		$strings['ConfigurationUpdateHelp'] = 'Bu ayarlarla ilgili dokümanlar için <a target=_blank href=%s>Yardım Dosyasının</a> Yapılandırma bölümüne bakın.';
		$strings['GeneralConfigSettings'] = 'ayarlar';
		$strings['UseSameLayoutForAllDays'] = 'Aynı düzeni bütün günler için kullan';
		$strings['LayoutVariesByDay'] = 'Günlere göre düzenleme yap';
		$strings['ManageReminders'] = 'Hatırlatmalar';
		$strings['ReminderUser'] = 'Kullanıcı Adı';
		$strings['ReminderMessage'] = 'Mesaj';
		$strings['ReminderAddress'] = 'Adresler';
		$strings['ReminderSendtime'] = 'Gönderme Zamanı';
		$strings['ReminderRefNumber'] = 'Rezervasyon Referans Numarası';
		$strings['ReminderSendtimeDate'] = 'Hatırlatma Tarihi';
		$strings['ReminderSendtimeTime'] = 'Hatırlatma Zamanı (HH:MM)';
		$strings['ReminderSendtimeAMPM'] = 'AM / PM';
		$strings['AddReminder'] = 'Hatırlatma Ekle';
        $strings['DeleteReminderWarning'] = 'Bunu silmek istediğinizden emin misiniz?';
        $strings['NoReminders'] = 'Yakın zamanda hatırlamanız gereken bir şey bulunmamaktadır.';
		$strings['Reminders'] = 'Hatırlatmalar';
		$strings['SendReminder'] = 'Hatırlatma Gönder';
		$strings['minutes'] = 'dakika';
		$strings['hours'] = 'saat';
		$strings['days'] = 'gün';
		$strings['ReminderBeforeStart'] = 'başlangıç saatinden önce';
		$strings['ReminderBeforeEnd'] = 'bitiş saatinden önce';
		$strings['Logo'] = 'Logo';
		$strings['CssFile'] = 'CSS Dosyası';
		$strings['ThemeUploadSuccess'] = 'Değişiklikleriniz kaydedildi. Değişikliğin uygulanması için sayfayı yenileyin.';
		$strings['MakeDefaultSchedule'] = 'Bunu varsayılan programım yap';
		$strings['DefaultScheduleSet'] = 'Artık bu vasayılan programınız';
		$strings['FlipSchedule'] = 'Zaman çizelgesi düzenini çevir';
		$strings['Next'] = 'Sonraki';
		$strings['Success'] = 'Sonuç';
		$strings['Participant'] = 'Katılımlı';
		$strings['ResourceFilter'] = 'Salon/Oda Filtresi';
		$strings['ResourceGroups'] = 'Salon/Oda Grupları';
		$strings['AddNewGroup'] = 'Yeni bir grup ekle';
		$strings['Quit'] = 'Çık';
		$strings['AddGroup'] = 'Grup Ekle';
		$strings['StandardScheduleDisplay'] = 'Standart zaman çizelgesini kullanın';
		$strings['TallScheduleDisplay'] = 'Uzun program görüntüsünü kullanın';
		$strings['WideScheduleDisplay'] = 'Geniş zaman çizelgesini kullanın';
		$strings['CondensedWeekScheduleDisplay'] = 'Yoğun haftalık program görüntüsünü kullanın';
		$strings['ResourceGroupHelp1'] = 'Yeniden düzenlemek için Salon/Oda gruplarını sürükleyip bırakın.';
		$strings['ResourceGroupHelp2'] = 'Ek eylemler için bir Salon/Oda grup adını sağ tıklayın.';
		$strings['ResourceGroupHelp3'] = 'Gruplara eklemek için Salonlar/Odalar sürükleyip bırakın.';
		$strings['ResourceGroupWarning'] = 'Salon/Oda grupları kullanılıyorsa, her Salon/Oda en az bir gruba atanmalıdır. Atanmamış Salonlar/Odalar saklanamaz.';
		$strings['ResourceType'] = 'Öneri';
		$strings['AppliesTo'] = 'Başvurular';
		$strings['UniquePerInstance'] = 'Benzersiz Örnek Olarak';
		$strings['AddResourceType'] = 'Öneri Ekle';
		$strings['NoResourceTypeLabel'] = '(öneri belirtilmedi)';
		$strings['ClearFilter'] = 'Temizle';
		$strings['MinimumCapacity'] = 'Minimum Kapasite';
		$strings['Color'] = 'Renk';
		$strings['Available'] = 'Uygun';
		$strings['Unavailable'] = 'Uygun Değil';
		$strings['Hidden'] = 'Gizli';
		$strings['ResourceStatus'] = 'Salon/Oda Durumu';
		$strings['CurrentStatus'] = 'Şu Anki Durum';
		$strings['AllReservationResources'] = 'Rezerv Edilebilecek Salonlar/Odalar';
		$strings['File'] = 'Dosya';
		$strings['BulkResourceUpdate'] = 'Toplu Salon/Oda Güncelleme';
		$strings['Unchanged'] = 'Değiştirilmemiş';
		$strings['Common'] = 'Ortak';
		$strings['AdminOnly'] = 'Sadece Yönetici mi?';
		$strings['AdvancedFilter'] = 'Gelişmiş Filtre';
		$strings['MinimumQuantity'] = 'En az Miktar';
		$strings['MaximumQuantity'] = 'En Fazla Miktar';
		$strings['ChangeLanguage'] = 'Dil Seçenekleri';
		$strings['AddRule'] = 'Kural Ekle';
		$strings['Attribute'] = 'Özellik';
		$strings['RequiredValue'] = 'Gerekli Değer';
		$strings['ReservationCustomRuleAdd'] = '%s ise, rezervasyon rengi olacak';
		$strings['AddReservationColorRule'] = 'Rezervasyon Renk Kuralını Ekle';
		$strings['LimitAttributeScope'] = 'Belirli Durumlarda Toplama';
		$strings['CollectFor'] = 'Topla';
		$strings['SignIn'] = 'Giriş Yap';
		$strings['AllParticipants'] = 'Tüm Katılımcılar';
		$strings['RegisterANewAccount'] = 'Hesap Oluştur';
		$strings['Dates'] = 'Gün';
		$strings['More'] = 'Daha fazla';
		$strings['ResourceAvailability'] = 'Salon/Oda Durumları';
		$strings['UnavailableAllDay'] = 'Bütün Gün Uygun Olmayan';
		$strings['AvailableUntil'] = 'Şu zamana kadar uygun';
		$strings['AvailableBeginningAt'] = 'Uygunluk Başlama Tarihi:';
		$strings['AvailableAt'] = 'Mevcut';
		$strings['AllResourceTypes'] = 'Bütün Salon/Oda Tipleri';
		$strings['AllResourceStatuses'] = 'Bütün Salon/Oda Durumları';
		$strings['AllowParticipantsToJoin'] = 'Sonradan katılımcı gelebilir';
		$strings['Join'] = 'Katıl';
		$strings['YouAreAParticipant'] = 'Bu rezervasyonun katılımcısı görünüyorsunuz';
		$strings['YouAreInvited'] = 'Bu rezervasyona davet edildiniz.';
		$strings['YouCanJoinThisReservation'] = 'Bu rezervasyona katılabilirsiniz.';
		$strings['Import'] = 'İçeri Aktar';
		$strings['GetTemplate'] = 'Şablon Ekle';
		$strings['UserImportInstructions'] = '<ul><li>Dosya CSV formatında olmalıdır.</li><li>Kullanıcı adı ve e-posta zorunlu alanlardır.</li><li>Öz nitelik geçerliliği uygulanmaz.</li><li>Diğer alanları boş bırakmak varsayılan değerleri ve \'şifre\' ise kullanıcının şifresini belirleyecektir.</li><li>Verilen şablonu örnek olarak kullanın.</li></ul>';
		$strings['RowsImported'] = 'İçeri Aktarılan Satır';
		$strings['RowsSkipped'] = 'Geçilen Satır';
		$strings['Columns'] = 'Kolonlar';
		$strings['Reserve'] = 'Rezerve Et';
		$strings['AllDay'] = 'Bütün Gün';
		$strings['Everyday'] = 'Her gün';
		$strings['IncludingCompletedReservations'] = 'Tamamlanan Rezervasyonları Dahil Et';
		$strings['NotCountingCompletedReservations'] = 'Tamamlanan Rezervasyonları Sayma';
		$strings['RetrySkipConflicts'] = 'Çakışan rezervasyonları atla';
		$strings['Retry'] = 'Yeniden Dene';
		$strings['RemoveExistingPermissions'] = 'Varolan izinler kaldırılsın mı?';
		$strings['Continue'] = 'Devam Et';
		$strings['WeNeedYourEmailAddress'] = 'Rezervasyon için email adresine ihtiyacımız var';
		$strings['ResourceColor'] = 'Salon/Oda Rengi';
		$strings['DateTime'] = 'Tarih Saati';
		$strings['AutoReleaseNotification'] = '%s dakika içinde işaretlenmezse otomatik olarak bırakılır';
		$strings['RequiresCheckInNotification'] = 'Giriş/Çıkış talebinde bulun';
		$strings['NoCheckInRequiredNotification'] = 'Giriş/Çıkış gerektirmez';
		$strings['RequiresApproval'] = 'Onay Gerektirir';
		$strings['CheckingIn'] = 'Giriş Yap';
		$strings['CheckingOut'] = 'Çıkış Yap';
		$strings['CheckIn'] = 'Giriş';
		$strings['CheckOut'] = 'Çıkış';
		$strings['ReleasedIn'] = 'Yayınlandı';
		$strings['CheckedInSuccess'] = 'Giriş yapıldı';
		$strings['CheckedOutSuccess'] = 'Çıkış yapıldı';
		$strings['CheckInFailed'] = 'Giriş yapılamadı';
		$strings['CheckOutFailed'] = 'Çıkış yapılamadı';
		$strings['CheckInTime'] = 'Giriş Saati';
		$strings['CheckOutTime'] = 'Çıkış Saati';
		$strings['OriginalEndDate'] = 'Gerçek Bitiş';
		$strings['SpecificDates'] = 'Belirli Tarihleri Göster';
		$strings['Users'] = 'Kullanıcılar';
		$strings['Guest'] = 'Misafir';
		$strings['ResourceDisplayPrompt'] = 'Görüntülenecek Salon/Oda';
		$strings['Credits'] = 'Kredi';
		$strings['AvailableCredits'] = 'Mevcut Krediler';
		$strings['CreditUsagePerSlot'] = 'Her sıra için %s kredi gerekiyor (az talep)';
		$strings['PeakCreditUsagePerSlot'] = 'Her sıra için %s kredi gerekiyor (yoğun)';
		$strings['CreditsRule'] = 'Yeterli krediniz yok. Gerekli krediler: %s. Hesapta bulunan krediler: %s';
		$strings['PeakTimes'] = 'Yoğun Zamanlar';
		$strings['AllYear'] = 'Bütün Yıl';
		$strings['MoreOptions'] = 'Daha Fazla Seçenek';
		$strings['SendAsEmail'] = 'E-postayla Gönder';
		$strings['UsersInGroups'] = 'Gruptaki Kullanıcılar';
		$strings['UsersWithAccessToResources'] = 'Salonlara/Odalara Erişen Kullanıcılar';
		$strings['AnnouncementSubject'] = '%s tarafından yeni bir duyuru gönderildi';
		$strings['AnnouncementEmailNotice'] = 'Bu duyuru kullanıcılara e-posta olarak gönderilecektir';
		$strings['Day'] = 'Gün';
		$strings['NotifyWhenAvailable'] = 'Müsait olduğunda bana bildir';
		$strings['AddingToWaitlist'] = 'Bekleme listesine eklendiniz';
		$strings['WaitlistRequestAdded'] = 'Bu zaman kullanılabilir hale gelirse size haber verilecektir';
		$strings['PrintQRCode'] = 'QR Code Yazdır';
		$strings['FindATime'] = 'Zaman Ara';
		$strings['AnyResource'] = 'Herhangi Bir Salon/Oda';
		$strings['ThisWeek'] = 'Bu Hafta';
		$strings['Hours'] = 'Saat';
		$strings['Minutes'] = 'Dakika';
        $strings['ImportICS'] = 'ICS den Aktar';
        $strings['ImportQuartzy'] = 'Quartzy dan Aktar';
        $strings['OnlyIcs'] = 'Yalnızca *.ics dosyaları yüklenebilir.';
        $strings['IcsLocationsAsResources'] = 'Mekanlar Salon/Oda olarak belirtilecek.';
        $strings['IcsMissingOrganizer'] = 'Any event missing an organizer will have the owner set to the current user.';
        $strings['IcsWarning'] = 'Rezervasyon kuralları uygulanmaz - çakışmalar, kopyalar, vb. mümkündür.';
		$strings['BlackoutAroundConflicts'] = 'Çakışan rezervasyonlar etrafında kısıtlama';
		$strings['DuplicateReservation'] = 'Kopya';
		$strings['UnavailableNow'] = 'Şuan Kullanılamıyor';
		$strings['ReserveLater'] = 'Daha Sonra Ayır';
		$strings['CollectedFor'] = 'Toplandı';
		$strings['IncludeDeleted'] = 'Silinen Rezervasyonları Dahil Et';
		$strings['Deleted'] = 'Silindi';
		$strings['Back'] = 'Geri';
		$strings['Forward'] = 'İleri';
		$strings['DateRange'] = 'Tarih Aralığı';
		$strings['Copy'] = 'Copy';
		$strings['Detect'] = 'Belirle';
		$strings['Autofill'] = 'Otomatik Doldurma';
		$strings['NameOrEmail'] = 'isim veya eposta';
		$strings['ImportResources'] = 'Salonları/Odaları İçe Aktar';
		$strings['ExportResources'] = 'Salonları/Odaları Dışa Aktar';
		$strings['ResourceImportInstructions'] = '<ul><li>Dosya CSV biçiminde olmalıdır.</li><li>İsim alanını doldurmak zorunludur. Diğer alanları boş bırakmak varsayılan değerleri belirleyecektir.</li><li>Durum seçenekleri \'Kullanılabilir\', \'Kullanılamıyor\' ve \'Gizlidir\'.</li><li>Renk altı değer olmalıdır. ex) #ffffff.</li><li>Otomatik atama ve onay sütunları doğru veya yanlış olabilir.</li><li>Ö nitelik geçerliliği uygulanmaz.</li><li>Virgül, birden fazla Salon/Oda grubunu ayırır.</li><li>Verilen şablonu örnek olarak kullanın.</li></ul>';
		$strings['ReservationImportInstructions'] = '<ul><li>Dosya, CSV biçiminde olmalıdır.</li><li>E-posta, Salon/Oda adları, başlangıç ve bitiş alanları zorunlu alanlardır.</li><li>Başlangıç ve bitiş için tam tarih saati gerekiyor. Önerilen biçim YYYY-aa-gg HH:mm (2017-12-31 20:30).</li><li>Kurallar,çakışmalar ve geçerli zaman aralıkları kontrol edilmeyecektir.</li><li>Bildirimler gönderilmez.</li><li>Ö nitelik geçerliliği uygulanmaz.</li><li>Virgül, birden çok Salon/Oda adını birbirinden ayırır.</li><li>Verilen şablonu örnek olarak kullanın.</li></ul>';
		$strings['AutoReleaseMinutes'] = 'Otomatik Yayın Dakikaları';
		$strings['CreditsPeak'] = 'Krediler (yoğun)';
		$strings['CreditsOffPeak'] = 'Krediler (yoğun değil)';
		$strings['ResourceMinLengthCsv'] = 'En Az Rezervasyon Süresi';
		$strings['ResourceMaxLengthCsv'] = 'En Fazla Rezervasyon Süresi';
		$strings['ResourceBufferTimeCsv'] = 'Koruma Süresi';
		$strings['ResourceMinNoticeCsv'] = 'En Az Rezervasyon Bildirimi';
		$strings['ResourceMaxNoticeCsv'] = 'En Fazla Rezervasyon Bitişi';
		$strings['Export'] = 'Dışa Aktar';
		$strings['DeleteMultipleUserWarning'] = 'Bu kullanıcıları silerseniz şu anda ki, gelecekteki ve geçmişteki bütün rezervasyonları kaldırılacaktır. Gönderilecek eposta yok.';
		$strings['DeleteMultipleReservationsWarning'] = 'Gönderilecek eposta yok.';
		$strings['ErrorMovingReservation'] = 'Rezervasyon Taşıma Hatası';
        $strings['SelectUser'] = 'Kullanıcı Seç';
        $strings['InviteUsers'] = 'Kullanıcıları Davet Et';
        $strings['InviteUsersLabel'] = 'Davet edilecek kişilerin eposta adreslerini girin.';
        $strings['ApplyToCurrentUsers'] = 'Mevcut kullanıcılara uygula';
		$strings['ReasonText'] = 'Gerekçe metni';
		$strings['NoAvailableMatchingTimes'] = 'Aramanızla eşleşen uygun zaman bulunamadı.';	
		$strings['Schedules'] = 'Takvimler';
		$strings['NotifyUser'] = 'Kullanıcıyı Bilgilendir'; 
		// End Strings

		// Install
		$strings['InstallApplication'] = 'Rezervasyon Zamanlayıcıyı Yükle (yalnızca MySQL)';
		$strings['IncorrectInstallPassword'] = 'Üzgünüz, bu şifre yanlış.';
		$strings['SetInstallPassword'] = 'Kurulumu çalıştırmadan önce kurulum şifresini ayarlamanız gerekmektedir.';
		$strings['InstallPasswordInstructions'] = '%s de lütfen %s rastgele ve tahmin etmesi zor bir şifre ayarlayın, sonra bu sayfaya geri dönün.<br/>%s kullanabilirsiniz';
		$strings['NoUpgradeNeeded'] = 'Rezervasyon güncel. Düzenlemeye gerek yok.';
		$strings['ProvideInstallPassword'] = 'Lütfen kurulum şifrenizi belirtin.';
		$strings['InstallPasswordLocation'] = 'Bu %s içindeki %s de bulunabilir.';
		$strings['VerifyInstallSettings'] = 'Devam etmeden önce aşağıdaki varsayılan ayarları doğrulayın. Veya bunları değiştirebilirsiniz %s.';
		$strings['DatabaseName'] = 'Veri Tabanı İsmi';
		$strings['DatabaseUser'] = 'Veri Tabanı Kullanıcısı';
		$strings['DatabaseHost'] = 'Veri Tabanı Sunucusu';
		$strings['DatabaseCredentials'] = 'Veri tabanlarını oluşturmak için ayrıcalıklı bir MySQL kullanıcısının kimlik bilgilerini sağlamanız gerekmektedir. Bilmiyorsanız, yöneticinize başvurun. Çoğu durumda, Salon/Oda çalışacaktır.';
		$strings['MySQLUser'] = 'MySQL Kullanıcısı';
		$strings['InstallOptionsWarning'] = 'Aşağıdaki seçenekler barındırılan ortamda çalışmayabilir. Barındırılan bir ortamda yüklüyorsanız, adımları tamamlamak için MySQL sihirbaz araçlarını kullanın.';
		$strings['CreateDatabase'] = 'Veri tabanını oluştur';
		$strings['CreateDatabaseUser'] = 'Veri tabanı kullanıcısını oluştur';
		$strings['PopulateExampleData'] = 'Örnek verileri içe aktarın. Yönetici hesabı oluştur: yönetici/şifre ve kullanıcı hesabı: kullanıcı/şifre';
		$strings['DataWipeWarning'] = 'Uyarı: Var olan tüm verileri silecektir';
		$strings['RunInstallation'] = 'Kurulumu Çalıştır';
		$strings['UpgradeNotice'] = '<b>%s</b> sürümünden <b>%s</b> sürümüne yükseltiyorsunuz';
		$strings['RunUpgrade'] = 'Yükseltmeyi Çalıştır';
		$strings['Executing'] = 'Yürütme';
		$strings['StatementFailed'] = 'Başarısız. Detay:';
		$strings['SQLStatement'] = 'SQL Bildiri:';
		$strings['ErrorCode'] = 'Hata Kodu:';
		$strings['ErrorText'] = 'Hata Metni:';
		$strings['InstallationSuccess'] = 'Kurulum başarıyla tamamlandı!';
		$strings['RegisterAdminUser'] = 'Yönetici kullanıcınızı kaydettirin. Örnek verileri içe aktarmadıysanız, bu gereklidir. Ensure that $conf[\'settings\'][\'allow.self.registration\'] = \'true\' in your %s file.';
		$strings['LoginWithSampleAccounts'] = 'Örnek verileri içe aktardıysanız, yönetici kullanıcısı için admin/şifre veya temel kullanıcı için kullanıcı/şifre ile giriş yapabilirsiniz.';
		$strings['InstalledVersion'] = 'Artık Kayıtlı Zamanlayıcının %s sürümünü çalıştırıyorsunuz';
		$strings['InstallUpgradeConfig'] = 'Yapılandırma dosyanızı yükseltmeniz önerilir';
		$strings['InstallationFailure'] = 'Kurulumda sorunlar vardı.  Lütfen bunları düzeltin ve kurulumu tekrar deneyin.';
		$strings['ConfigureApplication'] = 'Kayıtlı Zamanlayıcı Yapılandırma';
		$strings['ConfigUpdateSuccess'] = 'Yapılandırma dosyası şimdi güncel!';
		$strings['ConfigUpdateFailure'] = 'Yapılandırma dosyanızı otomatik olarak güncelleyemedik. Lütfen confg.php içeriğini aşağıdaki ile üzerine yazınız:';
		$strings['ScriptUrlWarning'] = '<em>script.url</em> ayarı doğru olmayabilir. Şu anda <strong>%s</strong>,bunun <strong>%s</strong> olması gerektiğini düşünüyoruz';
		// End Install

		// Errors
		$strings['LoginError'] = 'Kullanıcı adınızı veya şifrenizi eşleştiremedik';
		$strings['ReservationFailed'] = 'Rezervasyon Yapılamadı!';
		$strings['MinNoticeError'] = 'Bu rezervasyon önceden haber verilmesini gerektirir.  Ayrılabilecek en erken tarih ve saat %s.';
		$strings['MaxNoticeError'] = 'Bu rezervasyon gelecekteki şu ana kadar yapılamıyor.  Ayrılabilecek en son tarih ve saat %s.';
		$strings['MinDurationError'] = 'Bu rezervasyon en azından bitmelidir %s.';
		$strings['MaxDurationError'] = 'Bu rezervasyon daha uzun süremez %s.';
		$strings['ConflictingAccessoryDates'] = 'Aşağıdaki aksesuarların sayısı yeterli değil:';
		$strings['NoResourcePermission'] = 'İstenen Salonlardan/Odalardan birine veya daha fazlasına erişme izniniz bulunmamaktadır.';
		$strings['ConflictingReservationDates'] = 'Şu zaman için çakışma mevcut:';
		$strings['StartDateBeforeEndDateRule'] = 'Başlangıç tarihi ve saati bitiş tarihi ve saatinden önce olmalı.';
		$strings['StartIsInPast'] = 'Başlangıç tarihi ve saati geçmişte olamaz.';
		$strings['EmailDisabled'] = 'Yönetici e posta bildirimlerini devre dışı bıraktı.';
		$strings['ValidLayoutRequired'] = 'Yer ayırtma bir gün önceden yapılır ve ayırtılan yerin süresi öğlen 12 de biter.';
		$strings['CustomAttributeErrors'] = 'Yaptığınız ilave özelliklerle ilgili sorunlar var:';
		$strings['CustomAttributeRequired'] = '%s gerekli bir alandır.';
		$strings['CustomAttributeInvalid'] = 'Sağlanan değer %s geçersiz.';
		$strings['AttachmentLoadingError'] = 'Maalesef, istenen dosyanın yüklenmesi sırasında bir sorun oluştu.';
		$strings['InvalidAttachmentExtension'] = 'Yalnızca: %s türünden dosyaları yükleyebilirsiniz';
		$strings['InvalidStartSlot'] = 'İstenen başlangıç tarihi ve saati geçerli değil.';
		$strings['InvalidEndSlot'] = 'İstenen bitiş tarihi ve saati geçerli değil.';
		$strings['MaxParticipantsError'] = '%s yalnızca %s katılımcısını destekleyebilir.';
		$strings['ReservationCriticalError'] = 'Rezervasyonun kaydedilmesi sırasında önemli bir hata oluştu. Bu durum devam ederse, sistem yöneticinize başvurun.';
		$strings['InvalidStartReminderTime'] = 'Başlangıç hatırlatma saati geçerli değil.';
		$strings['InvalidEndReminderTime'] = 'Bitiş hatırlatma saati geçerli değil.';
		$strings['QuotaExceeded'] = 'Kota sınırı aşıldı.';
		$strings['MultiDayRule'] = '%s gün boyunca rezervasyonlara izin vermiyor.';
		$strings['InvalidReservationData'] = 'Rezervasyon talebi sırasında hata oluştu.';
		$strings['PasswordError'] = 'Şifreniz en az %s karakter ve en az %s adet rakam içermelidir.';
		$strings['PasswordErrorRequirements'] = 'Şifreniz en az %s adet büyük küçük harf ve %s adet rakam içermelidir.';
		$strings['NoReservationAccess'] = 'Bu rezervasyonu değiştirme izniniz bulunmamaktadır.';
		$strings['PasswordControlledExternallyError'] = 'Şifreniz harici bir sistem tarafından kontrol edildiğinden dolayı burada güncellenemez.';
		$strings['AccessoryResourceRequiredErrorMessage'] = 'Aksesuar %s yalnızca %s Salonlar/Odalar ile ayrılır';
		$strings['AccessoryMinQuantityErrorMessage'] = '%s aksesuarın en az %s sini ayırmalısın';
		$strings['AccessoryMaxQuantityErrorMessage'] = 'Aksesuarın %s sinden fazlasını %s ayırt edemezsiniz';
		$strings['AccessoryResourceAssociationErrorMessage'] = 'Aksesuar \'%s\' istenen Salonlar/Odalar rezerv edilemez';
		$strings['NoResources'] = 'Hiçbir Salon/Oda eklemediniz.';
		$strings['ParticipationNotAllowed'] = 'Bu rezervasyona katılmanıza izin verilmiyor.';
		$strings['ReservationCannotBeCheckedInTo'] = 'Bu rezervasyon kontrol edilemiyor.';
		$strings['ReservationCannotBeCheckedOutFrom'] = 'Bu rezervasyon şuradan kontrol edilemez.';
		$strings['InvalidEmailDomain'] = 'Bu e posta adresi izin verilen bir alan adından değil';
		// End Errors

		// Page Titles
		$strings['CreateReservation'] = 'Rezervasyon yap';
		$strings['EditReservation'] = 'Rezervasyon güncelle';
		$strings['LogIn'] = 'Giriş';
		$strings['ManageReservations'] = 'Rezervasyonlar';
		$strings['AwaitingActivation'] = 'Aksivasyon Bekleniyor';
		$strings['PendingApproval'] = 'Onay Bekliyor';
		$strings['ManageSchedules'] = 'Takvimler';
		$strings['ManageResources'] = 'Salonlar/Odalar';
		$strings['ManageAccessories'] = 'Ekipmanlar';
		$strings['ManageUsers'] = 'Kullanıcılar';
		$strings['ManageGroups'] = 'Gruplar';
		$strings['ManageQuotas'] = 'Kota';
		$strings['ManageBlackouts'] = 'Mazeretli Zamanlar';
		$strings['MyDashboard'] = 'Panelim';
		$strings['ServerSettings'] = 'Sunucu Ayarları';
		$strings['Dashboard'] = 'Panel';
		$strings['Help'] = 'Yardım';
		$strings['Administration'] = 'Yönetim';
		$strings['About'] = 'Hakkında';
		$strings['Bookings'] = 'Rezervasyonlar';
		$strings['Schedule'] = 'Takvim';
		$strings['Account'] = 'Hesap';
		$strings['EditProfile'] = 'Bilgilerimi Güncelle';
		$strings['FindAnOpening'] = 'Bir Açılış Bul';
		$strings['OpenInvitations'] = 'Açık Davetler';
		$strings['ResourceCalendar'] = 'Bütün Takvimler';
		$strings['Reservation'] = 'Yeni Rezervasyon';
		$strings['Install'] = 'Yükleme';
		$strings['ChangePassword'] = 'Şifre Güncelle';
		$strings['MyAccount'] = 'Hesabım';
		$strings['Profile'] = 'Bilgilerim';
		$strings['ApplicationManagement'] = 'Uygulama Yönetimi';
		$strings['ForgotPassword'] = 'Şifremi Unuttum';
		$strings['NotificationPreferences'] = 'Bildirim Seçenekleri';
		$strings['ManageAnnouncements'] = 'Bildirimler';
		$strings['Responsibilities'] = 'Görevler';
		$strings['GroupReservations'] = 'Grup Rezervasyonu';
		$strings['ResourceReservations'] = 'Salon/Oda Rezervasyonları';
		$strings['Customization'] = 'Özelleştir';
		$strings['Attributes'] = 'Parametre';
		$strings['AccountActivation'] = 'Hesap Aktivasyonu';
		$strings['ScheduleReservations'] = 'Rezervasyon Programı';
		$strings['Reports'] = 'Raporlar';
		$strings['GenerateReport'] = 'Yeni Rapor';
		$strings['MySavedReports'] = 'Kayıtlı Raporlarım';
		$strings['CommonReports'] = 'Genel Raporlar';
		$strings['ViewDay'] = 'Günü Gör';
		$strings['Group'] = 'Grup';
		$strings['ManageConfiguration'] = 'Uygulama Ayarları';
		$strings['LookAndFeel'] = 'Görünüm';
		$strings['ManageResourceGroups'] = 'Salon/Oda Grupları';
		$strings['ManageResourceTypes'] = 'Salon/Oda Tipleri';
		$strings['ManageResourceStatus'] = 'Salon/Oda Durumları';
		$strings['ReservationColors'] = 'Reservasyon Renkleri';
		$strings['SearchReservations'] = 'Rezervasyon Ara';
		// End Page Titles

		// Day representations
		$strings['DaySundaySingle'] = 'P';
		$strings['DayMondaySingle'] = 'P';
		$strings['DayTuesdaySingle'] = 'S';
		$strings['DayWednesdaySingle'] = 'Ç';
		$strings['DayThursdaySingle'] = 'P';
		$strings['DayFridaySingle'] = 'C';
		$strings['DaySaturdaySingle'] = 'C';

		$strings['DaySundayAbbr'] = 'Paz';
		$strings['DayMondayAbbr'] = 'Pts';
		$strings['DayTuesdayAbbr'] = 'Sal';
		$strings['DayWednesdayAbbr'] = 'Çar';
		$strings['DayThursdayAbbr'] = 'Per';
		$strings['DayFridayAbbr'] = 'Cum';
		$strings['DaySaturdayAbbr'] = 'Cts';
		// End Day representations

		// Email Subjects
		$strings['ReservationApprovedSubject'] = 'Rezervasyon Onaylandı';
		$strings['ReservationCreatedSubject'] = 'Rezervasyonunuz Oluşturuldu';
		$strings['ReservationUpdatedSubject'] = 'Rezervasyonunuz Güncellendi';
		$strings['ReservationDeletedSubject'] = 'Rezervasyonunuz İptal Edildi';
		$strings['ReservationCreatedAdminSubject'] = 'Bildirim: Rezervasyon Oluşturuldu';
		$strings['ReservationUpdatedAdminSubject'] = 'Bildirim: Rezervasyon Güncellendi';
		$strings['ReservationDeleteAdminSubject'] = 'Bildirim: Rezervasyon Kaldırıldı';
		$strings['ReservationApprovalAdminSubject'] = 'Bildirim: Rezervasyon İsteğiniz İçin Onayınız Gerekiyor';
		$strings['ParticipantAddedSubject'] = 'Rezervasyon Katılımcı Bildirimi';
		$strings['ParticipantDeletedSubject'] = 'Reservasyon İptal Edildi';
		$strings['InviteeAddedSubject'] = 'Rezervasyon Davetiyesi';
		$strings['ResetPasswordRequest'] = 'Şifre unuttum';
		$strings['ActivateYourAccount'] = 'Lütfen Hesabınızı Onaylayınız';
		$strings['ReportSubject'] = 'Rapor Talebiniz (%s)';
		$strings['ReservationStartingSoonSubject'] = '%s için rezervasyon yaklaşıyor';
		$strings['ReservationEndingSoonSubject'] = '%s rezervasyon bitmek üzere';
		$strings['UserAdded'] = 'Yeni kullanıcı yaratıldı';
		$strings['UserDeleted'] = '%s kullanıcısı %s tarafından kaldırıldı';
		$strings['GuestAccountCreatedSubject'] = 'Hesap Bilgileriniz';
		$strings['AccountCreatedSubject'] = '%s hesap ayrıntılarınız';	
		$strings['InviteUserSubject'] = '%s sizi  %s için katılmaya davet etti';

		$strings['ReservationApprovedSubjectWithResource'] = 'Rezervasyon Onaylandı %s';
		$strings['ReservationCreatedSubjectWithResource'] = 'Reservasyon Oluşturuldu %s';
		$strings['ReservationUpdatedSubjectWithResource'] = 'Reservasyon Güncellendi %s';
		$strings['ReservationDeletedSubjectWithResource'] = 'Reservasyon İptal Edildi %s';
		$strings['ReservationCreatedAdminSubjectWithResource'] = 'Bildirim: Rezervasyon Onaylandı %s';
		$strings['ReservationUpdatedAdminSubjectWithResource'] = 'Bildirim: Reservasyon Oluşturuldu %s';
		$strings['ReservationDeleteAdminSubjectWithResource'] = 'Bildirim: Reservasyon Güncellendi %s';
		$strings['ReservationApprovalAdminSubjectWithResource'] = 'Bildirim: %s Rezervasyonu Onayınızı Bekliyor';
		$strings['ParticipantAddedSubjectWithResource'] = '%s Sizi bir rezervasyona ekledi %s';
		$strings['ParticipantDeletedSubjectWithResource'] = '%s sizi rezervasyondan kaldırdı %s';
		$strings['InviteeAddedSubjectWithResource'] = '%s Sizi bir rezervasyona davet etti %s';
		$strings['MissedCheckinEmailSubject'] = 'Missed checkin for %s';
		// End Email Subjects

		$this->Strings = $strings;

		return $this->Strings;
	}

	/**
	 * @return array
	 */
	protected function _LoadDays()
	{
		$days = array();

		/***
		 * DAY NAMES
		 * All of these arrays MUST start with Sunday as the first element
		 * and go through the seven day week, ending on Saturday
		 ***/
		// The full day name
		$days['full'] = array('Pazar', 'Pazartesi', 'Salı', 'Çarşamba', 'Perşembe', 'Cuma', 'Cumartesi');
		// The three letter abbreviation
		$days['abbr'] = array('Pzr', 'Pts', 'Sal', 'Çar', 'Per', 'Cum', 'Cts');
		// The two letter abbreviation
		$days['two'] = array('Pz', 'Pt', 'Sa', 'Ça', 'Pe', 'Cu', 'Ct');
		// The one letter abbreviation
		$days['letter'] = array('P', 'P', 'S', 'Ç', 'P', 'C', 'C');

		$this->Days = $days;

		return $this->Days;
	}

	/**
	 * @return array
	 */
	protected function _LoadMonths()
	{
		$months = array();

		/***
		 * MONTH NAMES
		 * All of these arrays MUST start with January as the first element
		 * and go through the twelve months of the year, ending on December
		 ***/
		// The full month name
		$months['full'] = array('Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık');
		// The three letter month name
		$months['abbr'] = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');

		$this->Months = $months;

		return $this->Months;
	}

	/**
	 * @return array
	 */
	protected function _LoadLetters()
	{
		$this->Letters = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');

		return $this->Letters;
	}

	protected function _GetHtmlLangCode()
	{
		return 'en';
	}
}
