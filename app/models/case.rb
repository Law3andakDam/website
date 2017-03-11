class Case < ApplicationRecord
  belongs_to :blood_type
  validates :name, :email, :telephone, :hospital, :blood_type_id, presence: true
  validates :email, format: { with: Devise.email_regexp }
end
