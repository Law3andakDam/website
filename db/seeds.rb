BloodType.where(name: 'A+').first_or_create
BloodType.where(name: 'A-').first_or_create
BloodType.where(name: 'B+').first_or_create
BloodType.where(name: 'B-').first_or_create
BloodType.where(name: 'O+').first_or_create
BloodType.where(name: 'O-').first_or_create
BloodType.where(name: 'AB+').first_or_create
BloodType.where(name: 'AB-').first_or_create

User.where(email: 'admin@law3andakdam.com').first_or_create({
  name: 'admin',
  role: User::roles[:admin],
  password: 'ChangeMe!',
  confirmed_at: Time.now
  })
