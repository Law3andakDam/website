# Preview all emails at http://localhost:3000/rails/mailers/doner_mailer
class DonerMailerPreview < ActionMailer::Preview
  # Preview this email at http://localhost:3000/rails/mailers/doner_mailer/confirmation_email
  def confirmation_email
    DonerMailerMailer.confirmation_email
  end
end
